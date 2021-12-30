<?php declare(strict_types=1);

// parametros tipados
// se usa la funcion declare(strict_types=1) al inicio
function saludar($nombre, int $edad) {
    return "Hola, soy $nombre y tengo $edad años";
}

// SIN USAR el declare(strict_types=1)
// aun funciona pasar el numero expresado en cadena
// intenta convertirlo a entero y lo hace con exito
echo saludar("Armando", "30"); 

// SIN USAR el declare(strict_types=1) 
// arroja ERROR
// intenta convertirlo a entero pero no puede
echo saludar("Armando", "30 orgullosos"); 

// USANDO el declare(strict_types=1)
// esto ya no funciona
// intenta convertirlo a int pero no puede definitivamente
echo saludar("Armando", "30"); 

// USANDO el declare(strict_types=1)
// se debe pasar el tipo de argumento correcto
echo saludar("Armando", 30);

?>

