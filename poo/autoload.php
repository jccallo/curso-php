<?php

// ojo que esto va funcionar si tenemos 2 carpetas llamadas Espacio1 y Espacio2 respectivamente
// y dentro esten sus respectivas clases
use Espacio1\Persona;
use Espacio2\Persona as Persona2;

// esta definicion de funcion carga automaticamente solo las clases que se estan usando
spl_autoload_register(function($clase) {
    # lo carga solo si existe dicho archivo
    if (file_exists(str_replace("\\", "/", $clase) . ".php")) {
        // lo importa con require_once
        require_once str_replace("\\", "/", $clase) . ".php";
    }
});

Persona::saludar();
echo "<br>";
$persona2 = new Persona2();
$persona2->saludar();

?>