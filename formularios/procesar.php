<?php

// si el method es GET
// $name = $_GET["name"];

// si el method es POST
// $name = $_POST["name"];

// si el metthod es GET o POST
$name = $_REQUEST["name"]; // tipo text
$edad = $_REQUEST["edad"]; // tipo text
$genero = $_REQUEST["genero"]; // tipo radio
$estado = $_REQUEST["estado"]; // tipo select
$roles = $_REQUEST["roles"]; // tipo checkbox
$mensaje = $_REQUEST["mensaje"]; // tipo textarea
$imagen = $_FILES["imagen"]; // tipo file

// tipo text
echo "Nombre del usuario: $name" . "<br>";
echo "Edad del usuario: $edad" . "<br>";

// tipo radio
echo "Genero del usuario: $genero" . "<br>";

// tipo select
echo "Estado civil: $estado" . "<br>";

// tipo checkbox
echo "Roles:" . "<br>";
foreach ($roles as $rol) {
    echo "*" . "$rol" . "<br>";
}

// tipo textarea
echo "Mensaje: $mensaje" . "<br>";

// tipo file
var_dump($imagen); // vemos como esta compuesto $imagen

// mostramos la ruta temporal de la imagen
echo "<br>" . $imagen["tmp_name"];

// formamos la nueva ruta de la imagen
$nueva_ruta = "";
$nueva_ruta .= $_SERVER["DOCUMENT_ROOT"]; // ruta raiz: C:/xampp/htdocs
$nueva_ruta .= "/armorcodes/practica-interna/formularios/"; // carpeta de destino: /../../
$nueva_ruta .= $imagen["name"]; // nombre de la imagen con la extension: imagen.jpg 

// mostramos la nueva ruta de la imagen
echo "<br>" . $nueva_ruta; 

//  movemos la imagen
move_uploaded_file($imagen["tmp_name"], $nueva_ruta); // la imagen aparece en la carpeta de destino

// ojo que si se envia la misma imagen parece ser reemplazada

?>