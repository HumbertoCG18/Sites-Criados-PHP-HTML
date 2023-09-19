<!doctype html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="styleshhet.css">
        <script src="jquery-2.1.4.min.js"></script>
        <script src="javascript.js"></script>
    </head>

    <body>
        <p>Qual é o meu lutador favorito?</p>
        <form action='processa.php' name='form1' id='form1' method='post'>
            <input type="radio" name="radio" value="BL"> Bruce Lee <br>
            <input type="radio" name="radio" value="MA"> Muhammad Ali <br>
            <input type="radio" name="radio" value="IP"> Yip Man <br>
            <input type="radio" name="radio" value="MT"> Mike Tyson <br>

            <input type="submit" value="Votar">
        </form>

        <div id="resultado"></div>
    </body>
</html>