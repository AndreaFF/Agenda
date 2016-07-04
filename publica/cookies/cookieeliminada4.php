<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Leer una cookie</title>
    </head>
    <body>
        <h1>Leer una cookie</h1>
        <p>La cookie dice:</p>

    <?php

        if (isset($_COOKIE['cookieeliminar'])) {
           echo $_COOKIE['cookieeliminar'];
       }

    ?>
    </body>
</html>

