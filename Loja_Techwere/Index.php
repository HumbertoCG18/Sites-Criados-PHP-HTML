<?php 
include_once './include/_dados.php';
include_once './include/_header.php';
include_once './include/_menu.php';
?>

<header>
<link rel="stylesheet" href="style.css">
</header>

<body>


    <!-- Carrosel  -->
    <center>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"> 
          <div class="carousel-item active"> 
            <a href="Jaquetas.php" ><img class="d-block w-200" src="Imagens/Carrosel/Moletom1.png" alt=""></a>
            <div class="carousel-caption d-none d-md-block">
              <div class="text2">
                <h5>Moletom "Xdark Functional"</h5>
                <p>R$ 328,75  </p>
              </div>
              </div>
          </div>

          <div class="carousel-item">
            <a href="Jaquetas.php"><img class="d-block w-200" src="Imagens/Carrosel/Pancho.png" alt=""></a>
            <div class="carousel-caption d-none d-md-block">
              <div class="text1">
                <h5>Pancho "Pupil Travel"</h5>
                <p>R$ 204,62</p>
              </div>
              </div>
          </div>

          <div class="carousel-item">
            <a href="Jaquetas.php"><img class="d-block w-200" src="Imagens/Carrosel/Quimono.png" alt=""></a>
            <div class="carousel-caption d-none d-md-block">
              <div class="text1">
                <h5>Jaqueta "Nosucism Molle"</h5>
                <p>R$ 205,00</p>
              </div>
              </div>
          </div>

        </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="height: 1000px; margin-top: 50px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="height: 1000px; margin-top: 50px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
    </center>
<!-- Carrosel  -->

<!-- Produtos (Cards) -->
<div class="Lancamentos">
<div class="middle-text">
<Center>
  <b><p>Têndencias</p></b>
</Center>
</div>
</div>
<div class="row row-cols-3">
<?php 
//    array('nome'=>'Jaqueta NightWalker Preta','categoria'=>0,'preco'=>'599.00','foto'=>'jaqueta1.jpg'),
foreach($colecaoProdutos as $valor ){
  $catProduto = $valor['categoria'];
     echo "<div class=\"col mb-4\">
     <div class=\"card\" style=\"height: 620px; width: 20rem; margin-top: 50px; float: left ; background-color:#353935; border-radius: 10px; margin-left:120px\">
     <img src=\"ImagensP/{$valor['foto']}\" class=\"card-img-top\" alt=\"...\" style=\"width: 100%;\">
     <div class=\"card-body\">
       <h5 class=\"card-title\">{$valor['nome']}</h5>
     </div>
     <a href=\"Produto.php?pro={$valor['codigo']}\">
     <div class=\"container\" style=\"margin-top: 230px; width: 300px; height: 100px ;\">
       <div class=\"center\">
         <button class=\"btn\">
           <svg width=\"180px\" height=\"60px\" viewBox=\"0 0 180 60\" class=\"border\">
             <polyline points=\"179,1 179,59 1,59 1,1 179,1\" class=\"bg-line\" />
             <polyline points=\"179,1 179,59 1,59 1,1 179,1\" class=\"hl-line\" />
           </svg>
           <span>VISITAR</span>
         </button>
         </a>
       </div>
     </div>
   </div>
 </div>";


?>




<?php
}
?>
</div>



<?php
include_once './include/_footer.php';
?>



