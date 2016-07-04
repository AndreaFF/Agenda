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

            require_once './objeto.php';
            session_start();

            $_SESSION['temperatura'] = "30";
            $_SESSION['matriz'][] = 50;
            $_SESSION['matriz'][] = 40;
            $_SESSION['matriz'][] = 30;

            $_SESSION['objeto'] = new Objeto("Fernando");

        ?>
        <p>Se guardo la temperatura con el valor de 30 grados</p>
        <p>Para leer la temperatura en una nueva página, <a href="phpsesion2.php">haga click aquí</a></p>
    </body>
</html>
