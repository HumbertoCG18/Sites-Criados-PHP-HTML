<?php 
include_once '../Include/_db.php';

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
    $dados['Imagem'] = '';
    $dados['Preco'] = '';
    $dados['ProdutoID'] = '';
    $dados['CategoriaID'] = '';

}
include_once '_menu.php';
?>

    <main>
        <h2>Administração dos Produtos</h2>
        <a href="categirias-lista.php">Listagem</a>
        <hr>
        <form action="produto-processa.php" method="post" enctype="multipart/form-data">

            <label for="imagem">ID Da Categoria:</label><br>
            <input type="text" name="CategoriaID" value="<?php echo $id;?>"><br>

            <label for="imagem">ID do Produto:</label><br>
            <input type="text" name="ProdutoID" value="<?php echo $id;?>"><br>

            <label for="nome">Nome Do Produto:</label><br>
            <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>

            <label for="imagem">Descrição:</label><br>
            <textarea id="descricao" name="descricao"><?php echo $dados['Descricao'];?></textarea><br>

            <label for="image">Preço:</label><br>
            <textarea id="text" name="preco"><?php echo $dados['Preco'];?></textarea><br>

            
            <label for="imagem">Imagem:</label><br>
            <?php

            if( !empty($dados['Imagem'])){
            ?>
                <img src="../imagens/categorias/<?php echo $dados['Imagem'];?>" width="150"/><br>
            <?php
            }
            ?>

            <input type="file" name="foto">
            <hr>
            <input type="submit" value="Enviar">
        </form>
    </main>

<?php
include_once '_footer.php';
?>