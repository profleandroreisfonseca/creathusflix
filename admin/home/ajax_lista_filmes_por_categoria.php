<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.herokuapp.com';</script>";
    } 


	require('../../bancodados/conexao.php');  
	
		/* CONSULTA PARA EXIBIR OS ÚLTIMOS FILMES POSTADOS POR CATEGORIA */

		$codigo_categoria = $_GET['codigo_categoria'];
    
        $select_filmes_recentes = mysqli_query($conexao, "SELECT * FROM filmes WHERE codigo_categoria = $codigo_categoria  ORDER BY titulo ASC LIMIT 14");
    
        if (mysqli_num_rows($select_filmes_recentes) > 0) {
            
            $dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes);

            $tem_filme_na_categoria = 1;
            
        } else {

            $tem_filme_na_categoria = 0;

        }

?>

<div><h1>Filmes cadastrados</h1></div>

                <table>
                    
                    <tr class="tabela_cabecalho">

                        <td>CAPA</td>
                        <td>TÍTULO</td>
                        <td colspan="2">AÇÃO</td>

                    </tr>
			
                <?php do{ ?>
                    
                    <tr>

                        <td><img class="capa_filme" src="<?php if($tem_filme_na_categoria) echo $url.$dados_filmes_recentes['link_capa_filme']; else echo "../../imagens/filme.png"?>" onClick="mais_informacoes(<?php echo $dados_filmes_recentes['codigo'];?>)"></td>
                        
                        <td><?php if($tem_filme_na_categoria) echo $dados_filmes_recentes['titulo']; else echo "EM BREVE FILMES NESSA CATEGORIA";?></td>

                        <td>

                            <a href="editar.php?codigo_filme=<?php if($tem_filme_na_categoria) echo $dados_filmes_recentes['codigo'];?>">
                                <img src="../../imagens/editar.png" class="botao_acao" title="Editar">
                            </a>
                        </td>

                        <td>

                            <a href="javascript:func()" onclick="confirmar_exclusao('<?php if($tem_filme_na_categoria) echo $dados_filmes_recentes['codigo'];?>')">
                                <img src="../../imagens/excluir.png" class="botao_acao" title="Excluir">
                            </a>
                        </td>
                        
                    </tr>

                <?php } while ($dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes));?>

                </table>

        
