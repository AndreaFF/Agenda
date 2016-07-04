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


            require './objeto.php';
            session_start();
            if (isset($_SESSION['temperatura'])) {
                echo "Bien, la sesión tiene la temperatura: ".$_SESSION['temperatura'];
            }

            if (isset($_SESSION['matriz'])) {
                echo "</br>Bien, la sesión tiene la matriz: </br>";

                foreach ($_SESSION['matriz'] as $valor)
                {
                    echo $valor.'</br>';
                }
            }

            if (isset($_SESSION['objeto'])) {

                $objeto = $_SESSION['objeto'];


                echo $objeto->getNombre();
            }
        ?>
    </body>
</html>
