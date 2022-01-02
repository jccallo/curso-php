<?php 

// los espacios de nombres:
# los espacios de nombres no ayudan a trabajar con clases con el mismo nombre
# pero en espacios de nombres diferentes y asi no hay conflictos

// traemos lo archivos php con caracter obligatorio y una sola vez
require_once "espacios_nombres1.php";
require_once "espacios_nombres2.php";

// debemos de anteponer el espacio de nombre y una barra invertida
// asi no hay confusion a que clase se refiere
Espacio1\Persona::saludar();
echo "<br>";
$persona2 = new Espacio2\Persona();
$persona2->saludar();

echo "<br><br>";

// podemos usar 'use' para no poner el espacio de nombre caa ves que utilicemos a la clase
// pero estariamos con el miso problema de no saber a q clase se refiere
// asi que le ponemos un alias con la palabra reservada "as"
use Espacio1\Persona;
use Espacio2\Persona as Persona2;

// debemos de antepones el nombre del espacio de nombre y una barra invertida
Persona::saludar();
echo "<br>";
$persona2 = new Persona2();
$persona2->saludar();

?>