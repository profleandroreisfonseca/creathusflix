<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.herokuapp.com.com/admin/';</script>";
    } 



    require('../../bancodados/conexao.php');  


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
                        <li><a href="cadastro_filme.php">CADASTRAR FILMES</a>                          
                        <li><a href="sair.php">SAIR</a>                        
                    </ul>
                </nav>
        </div>

    </header>

        <div class="fitra_por_categoria">

            <h1>Filmes</h1>

            <select id="codigo_categoria" name="codigo_categoria" onChange="func_seleciona_filme_por_categoria()">
                
                <option disabled="disabled" selected="selected" style="color: #FFF;">Gênero</option>
                    <?php
                              
                        foreach ($array_select_categoria_filmes as $codigo_categoria => $nome_categoria) {
                                      
                            echo "<option value='{$codigo_categoria}'>{$nome_categoria}</option>";
                        }
                    ?>
            </select>

        </div>

    </header>


    <div class="estila_tabela" id="lista_filme" name="lista_filme">

            <div><h1>Filmes cadastrados</h1></div>

                <table>
                    
                    <tr class="tabela_cabecalho">

                        <td>CAPA</td>
                        <td>TÍTULO</td>
                        <td colspan="2">AÇÃO</td>

                    </tr>



                <?php do{ ?>
                    
                    <tr>

                        <td><img class="capa_filme" src="<?php echo $url.$dados_filmes_recentes['link_capa_filme'];?>" onClick="mais_informacoes(<?php echo $dados_filmes_recentes['codigo'];?>)"></td>
                        
                        <td><?php echo $dados_filmes_recentes['titulo'];?></td>
                        <td>

                            <a href="editar.php?codigo_filme=<?php echo $dados_filmes_recentes['codigo'];?>">
                                <img src="../../imagens/editar.png" class="botao_acao" title="Editar">
                            </a>
                        </td>

                        <td>

                            <a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_filmes_recentes['codigo'];?>')">
                                <img src="../../imagens/excluir.png" class="botao_acao" title="Excluir">
                            </a>
                        </td>
                        
                    </tr>

                <?php } while ($dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes));?>

                </table>

    </div>

    <footer>
    
      <p>&copy; 2023 CREATHUSFLIX. Todos os direitos reservados.</p>
      <p>Desenvolvido por Leandro Reis Fonseca. (92)99145.8562</p>

    </footer> 

</body>

</html>        