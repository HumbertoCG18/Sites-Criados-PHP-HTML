<?php
include_once '../Include/_db.php';
include_once '_head.php';

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conn,$sql);
$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>

    <main>
        <h2>Administração dos Produtos</h2>

        <a href="produto-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>Produto ID</th>
                <th>Categoria ID</th>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Preço(R$)</th>
                <th>Ações</th>
            </tr>

            <?php

            if ($resultado) {
                while ($dado = mysqli_fetch_array($resultado)){
            ?>
            <tr>
                <td><?php echo $dado['ProdutoID'];?></td>
                <td><?php echo $dado['CategoriaID'];?></td>
                <td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['ProdutoID'];?>"><?php echo $dado['Nome'];?></a></td>
                <td><?php echo $dado['ImagemP'];?></td>
                <td><?php echo $dado['Preco'];?></td>
                <td><a href="produto-processa.php?acao=excluir&id=<?php echo $dado['ProdutoID']; ?>">Excluir</a></td>
            </tr>
            <?php

                }
            }else{
            ?>
            <tr>
                <td colspan="6">Resultados não encontrados</td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="6">Total de Registros: <?php echo $total;?></td>
            </tr>
        </table>
    </main>

<?php
include_once '_footer.php';
?>
