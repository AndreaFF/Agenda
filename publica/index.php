<?php

require_once '../aplicacion/configuracion/configuracion.php';

require_once CONTROLADORES.'/ControladorRutas.php';

$controlador = new ControladorRutas();

$controlador->gestionarRuta();


?>
