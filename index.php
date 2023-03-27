<?php

    require('bancodados/conexao.php');
    

    /* CONSULTA PARA EXIBIR OS ÚLTIMOS FILMES POSTADOS */
    
        $select_filmes_recentes = mysqli_query($conexao, "SELECT * FROM filmes ORDER BY codigo DESC LIMIT 14");
                
    
        if (mysqli_num_rows($select_filmes_recentes) > 0) {
            
            $dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes);
            
        } 


     /* CONSULTA PARA EXIBIR AS CATEGORIAS DO FILME PARA O SELECT OPTION */
        
        $select_categoria_filmes = mysqli_query($conexao, "SELECT * FROM categoria_filmes ORDER BY nome ASC");

            if (mysqli_num_rows($select_categoria_filmes) > 0) {
                
                $total_select_categoria_filmes = mysqli_num_rows($select_categoria_filmes);
                
                for ($i = 0; $i < $total_select_categoria_filmes; $i++) {

                    $dados_select_categoria_filmes = mysqli_fetch_array($select_categoria_filmes);

                    $array_select_categoria_filmes[$dados_select_categoria_filmes['codigo']] = $dados_select_categoria_filmes['nome'];

                }
                
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
        

        <div class="fitra_por_categoria">

            <h1>Filmes</h1>

            <select id="codigo_categoria" name="codigo_categoria" onChange="func_seleciona_filme_por_scategoria()">
                
                <option disabled="disabled" selected="selected" style="color: #FFF;">Gênero</option>
                    <?php
                              
                        foreach ($array_select_categoria_filmes as $codigo_categoria => $nome_categoria) {
                                      
                            echo "<option value='{$codigo_categoria}'>{$nome_categoria}</option>";
                        }
                    ?>
            </select>

        </div>

    </header> 

        <div class="capitulo"><h1>Filmes recentes</h1></div>

        <div id="lista_filme" name="lista_filme" class="lista_filme">            

            <?php do {
                            
                $codigo_filme = $dados_filmes_recentes['codigo'];
                            
            ?>

                <div onClick="mais_informacoes(<?php echo $codigo_filme;?>)">

                    <img class="capa_filme" src="<?php echo $url.$dados_filmes_recentes['link_capa_filme'];?>">                
                    <p><?php echo $dados_filmes_recentes['titulo'];?></p>                 

                </div>

            <?php } while ($dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes));?>

        </div>

</body>

</html>        