<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Leer datos de una sesión</title>
    </head>
    <body>
        <h1>Leer datos de una sesion</h1>
        <?php

            session_start();
            if (isset($_SESSION['peso'])) {
                echo "Bien, la sesión tiene el peso: ".$_SESSION['peso'];
            }
            unset($_SESSION['peso']);
        ?>
        <p>Para continuar pulsa el <a href="eliminarphpsesion3.php">aquí</a></p>
    </body>
</html>
