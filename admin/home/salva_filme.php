<?php session_start();

    if (!isset($_SESSION['login'])) {  
        
        session_destroy();
     
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";
        echo "<script> window.location.href='https://creathusflix.debyantecnologia.com/';</script>";
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

        
        
        $titulo = $_POST['titulo']; 
        $descricao = $_POST['descricao'];
        $codigo_categoria = $_POST['codigo_categoria'];
        $link_capa_filme = "/imagens/filmes/".$nome_capa_filme;
        $link_trailer = $_POST['link_trailer'];

        //INSERINDO OS DADOS NO BANCO DE DADOS


        $insert_into_filmes = "INSERT INTO filmes (titulo, descricao, codigo_categoria, link_capa_filme, link_trailer) VALUES ('".$titulo."','".$descricao."','".$codigo_categoria."','".$link_capa_filme."','".$link_trailer."')";
    
    
        if (mysqli_query($conexao,$insert_into_filmes)) {


            mysqli_close($conexao);
            
            echo "<script> alert ('FILME PUBLICADO COM SUCESSO!');</script>";
            echo "<script> window.location.href='$url/admin/home';</script>";

      } else {
        
            echo "<script> alert ('NÃO FOI POSSÍVEL PUBLICAR O FILME.');</script>";
            
            mysqli_close($conexao);

            echo "<script> window.location.href='$url/admin/home';</script>";
        }
       


    }
        

?>