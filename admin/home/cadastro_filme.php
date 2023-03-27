<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.herokuapp.com/admin/';</script>";
    } 



    require('../../bancodados/conexao.php');  


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

    <link rel="stylesheet" type="text/css" href="../../css/estilo.css">

    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/funcoes_js.js"></script>



</head>


<body>
        
    <header>       
   
        <div class="barra_topo">

                <img src="../../imagens/logo.png">
            
                <nav>
                    <ul class="menu_admin">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">CADASTRAR SÉRIES</a>                          
                        <li><a href="sair.php">SAIR</a>                         
                    </ul>
                </nav>
        </div>

    </header>

        <form class="formulario_cadastro_filme" method="post" enctype="multipart/form-data" action="salva_filme.php">

            <div><h1>Cadastrar novo filme</h1></div>

                <div class="agrupamento_formulario_cadastro_filme">

                    <div>

                        <div><label>Categoria</label></div>

                            <select id="codigo_categoria" name="codigo_categoria" onChange="func_seleciona_filme_por_categoria()">
                                
                                <option disabled="disabled" selected="selected" style="color: #FFF;">Gênero</option>
                                    <?php
                                              
                                        foreach ($array_select_categoria_filmes as $codigo_categoria => $nome_categoria) {
                                                      
                                            echo "<option value='{$codigo_categoria}'>{$nome_categoria}</option>";
                                        }
                                    ?>
                            
                            </select>

                        <div><label>Título</label></div>

                        <input type="text" id="titulo" name="titulo" class="titulo_filme" required>

                        <div><label>Descrição</label></div>

                        <textarea id="descricao" name="descricao" rows="50" cols="33" class="descricao_filme" required></textarea>

                        <div><label>Trailer</label></div>

                        <textarea id="link_trailer" name="link_trailer" rows="50" cols="33" class="descricao_filme" required></textarea>

                        <!--<input type="text" id="descricao" name="descricao" class="descricao_filme" required>-->

                        <div>
                        
                            <input type="submit" id="btn_cadastrar_filme" name="btn_cadastrar_filme" class="btn_cadastrar_filme" value="CADASTRAR">

                        </div>

                    </div>
                  
                      <div class="grid">
                        <div class="form-element">
                          <input type="file" id="capa_filme" name="capa_filme" accept="image/*" required="required">
                          <label for="capa_filme" id="capa_filme-preview">
                            <img src="../../imagens/camera.png" alt="">
                            <div>
                              <span>Adicionar Capa</span>
                            </div>
                          </label>
                        </div>

                    </div> 
        </form>

        <script src="../../js/upload_capa_filme.js"></script>

</body>

</html>        
