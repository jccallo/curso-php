<?php

//  pasar argumentos por referencia
function sumarCinco(&$edad) {
  $edad += 5;
}

$edad = 30;
sumarCinco($edad);
echo $edad;

?>


