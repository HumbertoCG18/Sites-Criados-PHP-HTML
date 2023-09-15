
<?php
    include_once 'Include/_Db.php';
    include_once 'Include/_Head.php';
    include_once 'Include/_Header.php';

?>

<?php

$codigo= $_GET["not"] ;

$id = $_REQUEST;

$sql = "SELECT * FROM Noticias WHERE NoticiaID= $codigo";  

$resultado = mysqli_query( $conn , $sql);


?>

<div class="homeNoticias" id="homeNoticias">
            <?php 
            $tabNoticias = 1;
            if($resultado){
                while($row = mysqli_fetch_array($resultado)){
                    echo '<a href="Noticias.php?not='.$row['NoticiaID'].'" tabindex="'.$tabNoticias.'">';
                    echo '</a>'. '<h1 style="margin-left: 30px;">' . '<center>' . '<br>'.$row['Subtitulo'] . '<br><br>' . '</h1>' . '</center>'. '<center>' . '<h6 style="width: 980px; text-align: justify;">'. "Escrito Por: ". $row['Autor']  . '</h6>' . '<h6 style="width: 980px; text-align: justify;">'. "Publicado em: ". $row['Data']  . '</h6>' . '</h6>' . '<h6 style="width: 980px; text-align: justify;">'. "Tags: ". $row['Tags']  . '</h6>' . '<br>' . '</center>' . '<center>' . '<img src="Imagens/Artigos/' . $row['Imagem'] .'"width="512px" height="288px"/>'.'</center>'.'<center>'.'<br><br> <p style="width: 980px;">'.$row['Noticia'].'<br><br>'.'</p>';                     
                    $tabNoticias++;              
                }
               }
            ?>
</div>




<?php
    include_once 'Include/_Footer.php';
?>
