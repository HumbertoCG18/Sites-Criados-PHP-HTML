<?php

include_once '../Include/_db.php';


$acao = $_REQUEST['acao'];

$id = $_REQUEST['Senha'];

switch ($acao) {
    case 'excluir':
        
        $sql = "DELETE FROM Usuários WHERE UsuarioID = ".$id;

        mysqli_query($conn, $sql);

        header('location: ./usuario-lista.php');

        break;

    case 'salvar':

        $nome = $_POST['NomeCompleto'];
        $descricao = $_POST['email'];

        if( !isset($_POST['id']) || empty($_POST['id'])){

            $sql = "INSERT INTO `Usuários`(`NomeCompleto`, `Email`) VALUES ('".$nome."', '".$descricao."')";
        }else{
            $sql = "UPDATE `Usuario` SET `Nome`='".$nome."', `Email`='".$descricao."' WHERE `senha`='".$id."' ";
        }

        mysqli_query($conexao, $sql);
        
        header('location: ./produto-lista.php');

        break;
}