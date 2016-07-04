<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Almacenar datos en sesiones</title>
    </head>
    <body>
        <h1>Almacenar datos en sesiones</h1>
        <?php

            session_start();
            $_SESSION['peso'] = "50";

        ?>
        <p>Se guardo el peso con el valor de 50</p>
        <p>Para leer el peso en una nueva página, <a href="eliminarphpsesion2.php">haga click aquí</a></p>
    </body>
</html>
