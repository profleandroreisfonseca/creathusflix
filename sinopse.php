<?php

    require('bancodados/conexao.php');

   /* CONSULTA PARA EXIBIR A SINOPE DO FILME */

        $codigo_filme = $_GET['codigo_filme'];
    
        $select_filmes_recentes = mysqli_query($conexao, "SELECT * FROM filmes WHERE codigo = $codigo_filme");
    
        if (mysqli_num_rows($select_filmes_recentes) > 0) {
            
            $dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes);
            
        }   

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creathus Flix</title>

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funcoes_js.js"></script>

</head>


<body>
        
    <header>       
   
        <div class="barra_topo">

                <img src="imagens/logo.png">
            
                <nav>
                    <ul class="menu_home">
                        <li><a href="<?php echo $url;?>">HOME</a></li>
                        <li><a href="#">FILMES</a></li>
                        <li><a href="#">SÉRIES</a></li>
                    </ul>
                </nav>
        </div>
        

    </header>

        <div class="estrutura_sinopse">

                <div onClick="mais_informacoes(<?php echo $codigo_filme;?>)">

                    <!--<img class="sinopse_filme" src="<?php echo $url.$dados_filmes_recentes['link_capa_filme'];?>">-->

                    <label><?php echo $dados_filmes_recentes['link_trailer'];?></label>

                    <!--<input type="button" value="Play">-->

                    <p><?php echo $dados_filmes_recentes['titulo'];?></p>
                    <label><?php echo $dados_filmes_recentes['descricao'];?></label>                  

                </div>

        </div>

    <footer>
    
      <p>&copy; 2023 CREATHUSFLIX. Todos os direitos reservados.</p>
      <p>Desenvolvido por Leandro Reis Fonseca. (92)99145.8562</p>

    </footer>     

</body>

</html>        