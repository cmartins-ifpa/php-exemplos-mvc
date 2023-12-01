<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    </head>  
   
    <body>
        <div class="container">
            <div id="form_container">
                <form action="Controller.php" method="get" name="frm_calc">
                    <input type="hidden" name="acao" value="calcular" />
                    <fieldset>
                        <legend>Calculadora:</legend>
                        <br/>Numero 1: <input type="text" name="n1" id="n1_id" />
                        <select required name="operacao">
                            <option value="">Escolha a operação</option>
                            <option value="soma">+</option>
                            <option value="sub">-</option>
                            <option value="div">/</option>
                            <option value="mult">*</option>
                        </select>
                         <br/> Numero 2: <input type="text" name="n2" id="n1_id" />
                        <br/><br/>
                        <input type="submit" value='CALCULAR' name="btn_calc" id="btn_calc_id">
                    </fieldset>
                </form>
            </div>
            <br/>
            <div id="resultado">
                <?php
                if (isset($_GET['msg'])) {
                    echo $_GET['msg'];
                }
                ?>

            </div>

        </div>
    </body>
</html>