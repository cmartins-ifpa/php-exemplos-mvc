<?php
require_once("./bean/Usuario.class.php"); // include da Classe Bean
// trata a sessao
session_start();

//Armazena na variavel $acao o que o sistema esta requisitando (cadastrar, autenticar, excluir, etc)
if (isset($_REQUEST["acao"])) {
    $acao = $_REQUEST["acao"];
} else {
    $acao = null;
}
   

//Baseado no que foi solicitado, trata a tarefa, e depois redireciona para a View a resposta
switch ($acao) {
    case 'login': {
           header('location: ../formlogin.php');
           exit;  
        }
        break;
    case 'autenticar': {
            // Se for autenticar, receber login e senha.
            //Primeiro instanciamos um objeto da classe Bean, para setar os valores informados no formul�rio
            $usuario = new Usuario();

            /* Agora setamos para a Bean os valores informados 
            */ 
            $usuario->setLogin($_REQUEST["login"]);
            $usuario->setSenha($_REQUEST["senha"]);

            if ($usuario->getLogin() == 'admin' && $usuario->getSenha() == '123') {
                $_SESSION['login'] = $usuario->getLogin();
                header('location: ./view/homepage.php');
                exit;
            } else {
                // redireciona para a página de login com a mensagem de erro.
                header('location: ../formlogin.php?msg=Usuario ou Senha Invalida!');
                exit;
            }
        }
        break;

    case 'cadastrar': {
            //Aqui faz as validacoes necess�rias e requisita o metodo da classe DAO responsavel por cadastrar o usuario.
        }

    case 'excluir': {
            //Aqui faz as valida��es necess�rias e requisita o metodo da classe DAO responsavel por excluir o usuario.
        }

    default:
        echo "<h1>Erro de acao não esperado ";
        return null; //Por padrao, esse switch nao retorna nada.
}
?>