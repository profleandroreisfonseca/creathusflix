<?php 


	require('bancodados/conexao.php');
	
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


<?php do { ?>

           
           <?php  
           
                if($tem_filme_na_categoria){
               
                   $codigo_filme = $dados_filmes_recentes['codigo'];     
                    
                    echo '<div onClick="mais_informacoes('.$codigo_filme.')">
                        
                        <img class="capa_filme" src="'.$url.$dados_filmes_recentes['link_capa_filme'].'">
                                        
                        <p>'.$dados_filmes_recentes['titulo'].'</p>                 
    
                    </div>';
                
                }else{
                            
                    echo '<div><p style="font-weight:700; color: #F00;">EM BREVE FILMES NESSA CATEGORIA.</p></div>';
                            
                            
                }?>

<?php } while ($dados_filmes_recentes = mysqli_fetch_assoc($select_filmes_recentes));?>