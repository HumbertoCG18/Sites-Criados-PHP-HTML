

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$curriculo = $_FILES['curriculo']; 

/*Numero para guardar o arquivo */
$num = rand(1,999);

/*Guardar os arquivos dentro da página */
$pasta = "Curriculo/";

/*Guarda o nome do aquivo temporario */
$temporario = $_FILES['curriculo']['tmp_name'];

/*Define o tipo do arquivo */
$extensao = pathinfo($_FILES['curriculo']['name'], PATHINFO_EXTENSION);

/*Cria o futoro nome do arquivo */
$nomeTemp = $num.'.'.$extensao;

/*Movimentar o arquivo temporario para a pasta de destino */
move_uploaded_file($temporario, $pasta.$nomeTemp);



echo "<p> Agradecemos seu contato $name </p>";
echo "<p> Este é seu email: $email </p>"; 
echo "<p> E sua mensagem foi: $message </p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-processa.css" rel="stylesheet">
    <title>Tech-Wear RS</title>
</head>
<body>
    
    <p>Seu Curriculo foi Enviado e Arquivado!</p>
    
</body>
</html>