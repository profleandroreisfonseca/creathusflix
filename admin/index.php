<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creathus Flix</title>

    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/funcoes_js.js"></script>

</head>


<body>
        
    <header>       
   
        <div class="barra_topo">

                <img src="../imagens/logo.png">
            
                
        </div>
        

        <form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">

            <div><h1>ACESSO ADMINISTRATIVO</h1></div>

                <div class="agrupamento_login">

                    <div>

                        <div><label>Login</label></div>  

                        <div><input type="text" id="nome_login" name="nome_login" required autofocus></div>

                        <div><label>Senha</label></div>

                        <div><input type="password" id="senha_login" name="senha_login" required></div>

                        <div><input type="submit" id="btn_entrar" name="btn_entrar" value="ENTRAR"></div>

                    </div>

                </div>

        </form>

    

</body>

</html>        