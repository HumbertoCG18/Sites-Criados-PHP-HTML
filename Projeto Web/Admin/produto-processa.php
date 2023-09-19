<?php 
include_once '../Include/_db.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['ProdutoID'];

switch ($acao) {
    case 'excluir';
        $sql = "DELETE FROM produto WHERE ProdutoID = ".$id;
        mysqli_query($db,$sql);
        header('location: ./produto-lista.php');

        break;

    case 'salvar':
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        if($_FILES['foto']['size'] > 0){
            $uploaddir = '../Imagens/Produto/';
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $nomearquivo = 'produto-'.$id.'-'.rand().'.'.$extensao;
            $uploadfile = $uploaddir . $nomearquivo;
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }else{
            $nomearquivo = $_POST['imagem'];
        }

        if (!isset($_POST['id']) || empty($_POST['id'])){
            $sql = "INSERT INTO `categorias`(`Nome`,`Descricao`, `Imagem`) VALUES ('".$nome."','".$descricao."','".$nomearquivo."')";
        }else{
            $sql = "UPDATE `categorias` SET `Nome`='".$nome."', `Descricao`='".$descricao."', `Imagem`='".$nomearquivo."' WHERE `CategoriaID`='".$id."' ";
        }

        mysqli_query($db,$sql);
        header('location: ./produto-lista.php');

        break;
}