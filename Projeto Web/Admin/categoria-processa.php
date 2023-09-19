<?php

include_once '../Include/_db.php';

$id = $_REQUEST['id'];
$acao = $_REQUEST['acao'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM categorias WHERE CategoriaID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./categoria-lista.php');

        break;

    case 'salvar':

        $nome = $_POST['Nome'];
        $descricao = $_POST['Descricao'];

        if( !isset($_POST['id']) || empty($_POST['id'])){

            $sql = "INSERT INTO `Categorias`(`Nome`, `Descricao`) VALUES ('".$nome."', '".$descricao."')";
        }else{
            $sql = "UPDATE `categoria` SET `Nome`='".$nome."', `Descricao`='".$descricao."' WHERE `CategoriaID`='".$id."' ";
        }

        mysqli_query($conn, $sql);
        
        header('location: ./categoria-lista.php');

        break;
    
    case 'salvar':

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if($_FILES['foto']['size'] > 0){
            $uploaddir = '../Imagens/categorias/';

            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

            $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;

            $uploadfile = $uploaddir . $nomearquivo;

            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }else{
            $nomearquivo = $_POST['imagem'];
        }

        if( !isset($_POST['id']) || empty($_POST['id'])){

            $sql = "INSERT INTO `categorias`(`Nome`, `Descricao`,`Imagem`) VALUES ('".$nome."','".$descricao."','".$nomearquvio."')";
        }else{

            $sql = "UPDATE `categorias` SET `Nome` = '".$nome."', `Descricao`='".$descricao."', `Imagem`='".$nomearquivo."' WHERE `CategoriaID`='".$id."' ";
        }

        mysqli_query($conn, $sql);
        
        header('location: ./categoria-lista.php');

        break;
}