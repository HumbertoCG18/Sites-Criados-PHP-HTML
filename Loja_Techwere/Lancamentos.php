<?php 
include_once './include/_dados.php';
include_once './include/_header.php';
include_once './include/_menu.php';
?>
<!-- Texto Do Meio -->
<header>
<link rel="stylesheet" href="style.css">
</header>

<div class="Lancamentos">
<div class="middle-text">
<Center>
  <b><p>Lançamtos</p></b>
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


