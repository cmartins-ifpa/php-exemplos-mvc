<?php
require_once("./Calculadora.php"); // inclui a Classe do Modelo
// inicia a sessao (caso precise salvar objetos na sessão)
session_start();

//Armazena na variavel $acao o que a app esta requisitando 
if (isset($_REQUEST["acao"])) {
    $acao = $_REQUEST["acao"];
} else {
    $acao = null;
}

//Baseado no que foi solicitado, trata a tarefa, e depois redireciona para a View a resposta
switch ($acao) {
    case 'limpar': {
            header('location: ./form-calculadora.php');
            exit;
        }
        break;
    case 'calcular': {
            $calc = new Calculadora();
            $op = $_REQUEST["operacao"];
            $n1 = $_REQUEST["n1"];
            $n2 = $_REQUEST["n2"];
            $resp = 0;
            switch ($op) {
                case "soma" :
                    $resp = $calc->soma($n1, $n2);
                    break;
                case "sub" :
                    $resp = $calc->sub($n1, $n2);
                    break;
                case "div" :
                    $resp = $calc->div($n1, $n2);
                    break;
                case "mult" :
                    $resp = $calc->mult($n1, $n2);
                    break;

                default:
                    break;
            }
            // formata a resp e redireciona para a visão
            $resp = "RESULTADO ($n1 $op $n2)= " . $resp;
            header('location: ./form-calculadora.php?msg=' . $resp);
            exit;
        }
        break;

    case 'xxxxx': {
            // Aqui você trata outra 'acao' 
        }

    default:
        echo "<h1>Erro de acao não esperado ";
        return null; //Por padrao, esse switch nao retorna nada.
}
?>