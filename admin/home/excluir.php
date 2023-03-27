<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.herokuapp.com/admin/';</script>";
    } 



    require('../../bancodados/conexao.php');  


    /* FUNÇÃO PARA REMOVER O FILME */

    $codigo_filme = $_GET['codigo_filme'];

    $delete_filme = "DELETE FROM filmes WHERE codigo = $codigo_filme";
    
    
        if (mysqli_query($conexao,$delete_filme)) {

                echo "<script> alert ('FILME EXCLUÍDO COM SUCESSO!');</script>";

                echo "<script> window.location.href='$url/admin/home';</script>";
                
            } else {
            
                echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

                echo "<script> window.location.href='$url/admin/home';</script>";
                
            }

?>            
