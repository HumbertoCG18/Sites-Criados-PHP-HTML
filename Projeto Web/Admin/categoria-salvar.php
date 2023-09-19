<?php 
include_once '../include/_db.php';

include_once '_head.php';

if( isset($_GET['id']) || !empty($_GET['id'])){

    $id=$_GET['id'];
    $sql="SELECT *FROM categorias WHERE CategoriaID=" .$id;
    $resultado = mysqli_query($conn,$sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
}else{
    $id= '';
    $dados ['Nome']= '';
    $dados['Descricao'] = '';

}
include_once '_menu.php';
?>

    <main>
        <h2>Administração das categorias</h2>
        <a href="categoria-lista.php">Listagem</a>
        <hr>
        <form action="categoria-processa.php" method="post" enctype="multipart/form-data">
            <input type="text" value="salvar" name="acao">
            <br><br>
            <label for="categoriaID">Categoria ID:</label><br>
            <input type="text" name="id" value="<?php echo $id;?>"><br>
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao"><?php echo $dados['Descricao'];?></textarea><br>
            <label for="imagem">Imagem:</label><br>
            <?php

            if( !empty($dados['Imagem']) ){
            ?>
                <img src="../imagens/categorias/<?php echo $dados['Imagem'];?>" width="150" /><br>
            <?php
            }
            ?>
            <input type="file" name="foto">
            <hr>
            <input type="submit" value="enviar">
        </form>
    </main>

<?php
include_once '_footer.php';
?>