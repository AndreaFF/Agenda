<?php

define ('HOME', 'C:/wamp64/www/agenda');
define ('APLICACION', HOME.'/aplicacion');
define ('CONFIGURACION', APLICACION.'/configuracion');
define ('VISTAS', APLICACION.'/vistas');
define ('LAYOUTS', VISTAS.'/layouts');
define ('CONTROLADORES', APLICACION.'/controladores');
define ('MODELOS', APLICACION.'/modelos');
define ('CLASES', APLICACION.'/clases');


define ('PUBLICA', HOME.'/publica');
define ('CSS', PUBLICA.'/css');
define ('IMAGENES', PUBLICA.'/img');
define ('IMAGENESDATOS', IMAGENES.'/datos');
define ('JAVASCRIPT', PUBLICA.'/js');



define ('URLAPLICACION', 'http://'.$_SERVER['HTTP_HOST']);
define ('URLCSS', URLAPLICACION.'/css');
define ('URLIMAGENES', URLAPLICACION.'/img');
define ('URLIMAGENESDATOS', URLIMAGENES.'/datos');
define ('URLJAVASCRIPT', URLAPLICACION.'/js');

define ('SERVIDOR', '127.0.0.1');
define ('USUARIO','root');
define ('CLAVE','');
define ('BASEDATOS','agenda');

?>
