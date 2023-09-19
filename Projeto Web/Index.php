<?php
    include_once 'Include/_Db.php';
    include_once 'Include/_Head.php';
    include_once 'Include/_Header.php';
?>
    
    <main>
        <h1>Categorias</h1>

<?php


$sql = "SELECT * FROM categorias";            


$resultado = mysqli_query( $conn , $sql);
?>

        <section id="homeCategorias">
            <?php 
            $tabCategoria = 1;
            if($resultado){
                while($row = mysqli_fetch_array($resultado)){
                    echo '<a href="categoria.php?cat='.$row['CategoriaID'].'" alt="'.$row['Descricao'].'" title="" tabindex="'.$tabCategoria.'">';
                    echo '<img src="imagens/categorias/' . $row['Imagem'] . '" alt="' . '" title="' . $row['Descricao'] . '"width="100px" height="100px"/>' . $row['Nome'] . '';
                    echo '</a>';
                    $tabCategoria++;                
                }
               }    
            ?>
            <br><br>
        </section>
        
        </main>

        <section id="Produtos">
    <h1>Produtos</h1>
<?php


$sql = "SELECT * FROM produtos";            


$resultado = mysqli_query( $conn , $sql);
?>

        <section id="homeProdutos">
            <?php 
            $tabProdutos = 1;
            if($resultado){
                while($row = mysqli_fetch_array($resultado)){
                    echo '<a href="produtos.php?pro='.$row['ProdutoID'].'" tabindex="'.$tabProdutos.'">';
                    echo '<img src="imagens/produto/' . $row['ImagemP'] . '" alt="' .'" width="100px" height="100px"/>'. $row['Nome'] . '<br><br>' . ' R$ ' . $row['Preco'] .'</a>';
                    $tabProdutos++;                
                }
               }
            ?>
        </section>
            </section>

        <?php
    include_once 'Include/_Footer.php';
?>



















