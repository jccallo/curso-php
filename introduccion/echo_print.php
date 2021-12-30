<?php

$nombre = "Armando";
$edad = 30;
$numero = 5;

// soporta multiples parametros pero es raro usarlo asi
echo "Me llamo Armando. ", "Mi edad es 35 años", "<br><br>";

// podemos colocar directamente la variable dentro de la cadena
echo "Me llamo $nombre";

// podemos imprimir codigo HTML
echo "<br>";

// podemos concatenar datos
echo "Tengo ". $edad ." años<br>";

// podemos hacer operaciones
echo "Mi edad en 5 años es ". $edad + $numero;

// primt retorna un 1 cuando imprime lo cual es util en expresiones
// esto no sucede con echo
$imprimir = print("<br><br>Adios<br>");
echo $imprimir;

?>


