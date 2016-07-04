<?php

setcookie('mensajetiempo', "Esta cookie caducara en 30 dias.", time() * 60 * 60 * 24 * 30);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Generar una cookie</title>
    </head>
    <body>
        <h1>Generar una cookie</h1>
        <p>Hemos generado una cookie con duración de 30 días! Mirar en el siguiente <a href="obtenercookiecontiempo3.php">enlace</a> para ver la cookie</p>
    </body>
</html>
