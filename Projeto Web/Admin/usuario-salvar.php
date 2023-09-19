<?php 
include_once '../Include/_db.php';
include_once '_head.php';
include_once '_menu.php';

if( isset($_GET['id']) || !empty($_GET['id'])){

    $id=$_GET['id'];
    $sql="SELECT *FROM Usuários WHERE UsuarioID=" .$id;
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado,MYSQKI_ASSOC);
}

else{
    $id= '';
    $dados ['NomeCompleto']= '';
    $dados['Email'] = '';
    $dados['Senha'] = '';
    $dados['UsuarioID'] = '';
    $dados['Imagem'] = '';
}

?>
    <main>
        <h2>Administração de Usuarios</h2>
        <a href="usuario-lista.php">Listagem</a>
        <hr>
        <form action="usuario-processa.php" method="post">

            <br><label for="nome">Usuario ID:</label><br>
            <input type="text" id="UsuarioID" name="UsuarioID" value="<?php echo $dados['UsuarioID'];?>"><br>

            <br><label for="nome">Nome Completo:</label><br>
            <input type="text" id="Nome" name="Nome" value="<?php echo $dados['NomeCompleto'];?>"><br>

            <br><label for="nome">Email:</label><br>
            <input type="text" id="Email" name="Email" value="<?php echo $dados['Email'];?>"><br>

            <br><label for="nome">Senha:</label><br>
            <input type="text" id="Senha" name="Senha" value="<?php echo $dados['Senha'];?>"><br>
            
            <hr>

            <?php
            if( !empty($dados['Imagem'])){
            ?>
                <img src="../imagens/Usuario/<?php echo $dados['Imagem'];?>" width="150"/><br>
            <?php
            }
            ?>

            <input type="file" name="foto">
            <hr>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </main>

<?php
include_once '_footer.php';
?>