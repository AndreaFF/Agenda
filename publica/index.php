<?php

require_once '../aplicacion/configuracion/configuracion.php';

require_once CLASES.'/Contacto.php';

$conexion = mysql_connect(SERVIDOR, USUARIO, CLAVE)
      or die ("No se pudo conectar a la base de datos");

      $base_datos = mysql_select_db(BASEDATOS, $conexion)
      or die ("No se pudo seleccionar la base de datos");

      $consulta = "SELECT * FROM contacto WHERE id=3";

      $resultado = mysql_query($consulta)
      or die ("Consulta fallida: " . mysql_error());

      $fila = mysql_fetch_array($resultado);
      $oContacto = new Contacto($fila['nombre'], $fila['apellidos'],
              $fila['direccion'], $fila['telefono'], $fila['email'], $fila['imagen'],
              $fila['id'], $fila['contador_visitas']);


      var_dump ($oContacto);


?>
