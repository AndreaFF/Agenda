<?php

$fichero=fopen($_FILES['fichero']['tmp_name'],"r");

while (!feof($fichero)){
  $texto=fgets($fichero);
  echo $texto."<br>";
}

fclose($fichero);

?>
