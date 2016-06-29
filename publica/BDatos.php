<?php

$conexion = mysqli_connect("localhost", "root", "", "agenda")
        or die ("No se pudo conectar a la base de datos");

$base_datos = $conexion->select_db("agenda")
        or die ("No se pudo seleccionar la base de datos");

$consulta = "SELECT * FROM contacto ORDER BY contador_visitas DESC";

$resultado = $conexion->query($consulta)
        or die ("Consulta fallida: " . $conexion->error);

if ($sentencia = $mysqli->prepare($consulta)) {

/* ejecutar la sentencia */
$sentencia->execute();

/* vincular las variables de resultados */
$sentencia->bind_result($nombre, $código);

/* obtener los valores */
while ($sentencia->fetch()) {
    printf ("%s (%s)\n", $nombre, $código);
}

/* cerrar la sentencia */
$sentencia->close();

mysqli_close($conexion);

?>
