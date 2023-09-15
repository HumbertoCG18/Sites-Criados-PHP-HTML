<?php 
include_once './include/_dados.php';
include_once './include/_header.php';
include_once './include/_menu.php';
?>
<body>
<header>
<link rel="stylesheet" href="style.css">
</header>
<!-- Formulário -->
<div class="Forms">
<header style="color: white;">Fale Conosco!</header>
<form id="form" enctype="multipart/form-data" class="topBefore" action="DadosForms.php" method="post">
		
		 <input name="name" type="text" placeholder="Nome">
	     <input name="email" type="text" placeholder="E-mail">
		 <div class="Curriculo">
		 <input type="file" name="curriculo" value="0">
		 <textarea name="message" type="text" placeholder="Mensagem"></textarea>

  <input style="width: 100%;" id="submit" type="submit" value="Enviar">
</form>
</div>
<!-- /Formulário -->



<?php
include_once './include/_footer.php';
?>
