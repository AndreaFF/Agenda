<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Enviar archivos</title>
</head>
<body>
    <h1>Enviar archivos</h1>
    <form action="recoger_archivos.php" enctype="multipart/form-data" method="post">
    <label for="fichero">Fichero:</label>
    <input type="file" name="fichero" >
    <input type="submit" value="Enviar">
  </form>
</body>
</html>
