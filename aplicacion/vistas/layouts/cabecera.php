<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?= URLCSS ?>/estilo.css" />
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <title>Agenda de Contactos</title>
    </head>
    <body>
        <header>
                <h1>Agenda de Contactos</h1>
        </header>

        <nav>
            <ul>
                <li><a href="<?= URLAPLICACION ?>"><img src="<?= URLIMAGENES ?>/home.png" alt="Inicio" /><span>Inicio</span></a></li>
                <li><a href="<?= URLAPLICACION ?>/index.php?accion=listar"><img src="<?= URLIMAGENES ?>/list.png" alt="Listar Contacto" /><span>Listar Contactos</span></a></li>
                <li><a href="<?= URLAPLICACION ?>/index.php?accion=vistainsertar"><img src="<?= URLIMAGENES ?>/add.png" alt="Insertar Contacto" /><span>Insertar Contactos</span></a></li>
            </ul>
        </nav>
