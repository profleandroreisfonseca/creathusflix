<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.herokuapp.com.com/';</script>";
    } 



    require('../../bancodados/conexao.php');


    //RECEBENDO OS DADOS DO FORMULÁRIO QUE SERÃO SALVOS NO BANCO DE DADOS

    //FAZENDO O UPLOAD PARA O SERVIDOR

    if (!empty($_FILES)) {


        $diretorio = "../../imagens/filmes/";
                
        $capa_filme = $_FILES['capa_filme']['name'];

        $capa_filme_ext = strtolower(pathinfo($capa_filme, PATHINFO_EXTENSION)); 

        $nome_capa_filme = md5(uniqid(time())).".".$capa_filme_ext; 

        move_uploaded_file($_FILES['capa_filme']['tmp_name'], $diretorio . $nome_capa_filme);

        
        
        $codigo_filme = $_POST['codigo_filme'];
        $titulo = $_POST['titulo']; 
        $descricao = $_POST['descricao'];
        $codigo_categoria = $_POST['codigo_categoria'];
        $link_capa_filme = "/imagens/filmes/".$nome_capa_filme;

        $link_trailer = $_POST['link_trailer'];


        //ATUALIZANDO OS DADOS NO BANCO DE DADOS


        $update_filmes = "UPDATE filmes SET titulo = '".$titulo."', descricao = '".$descricao."', codigo_categoria = '".$codigo_categoria."', link_capa_filme = '".$link_capa_filme."', link_trailer = '".$link_trailer."' WHERE codigo = $codigo_filme";

        //echo $update_filmes;
    
    
        if (mysqli_query($conexao,$update_filmes)) {


            mysqli_close($conexao);
            
            echo "<script> alert ('FILME ATUALIZADO COM SUCESSO!');</script>";
            echo "<script> window.location.href='$url/admin/home';</script>";

      } else {
        
            echo "<script> alert ('NÃO FOI POSSÍVEL ATUALIZAR O FILME.');</script>";
            
            mysqli_close($conexao);

            echo "<script> window.location.href='$url/admin/home';</script>";
        }
  


    }
        

?>