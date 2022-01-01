<?php

// propiedades estaticas:
// Las propiedades estáticas se pueden llamar directamente, sin crear una instancia de una clase. 
// Las propiedades estáticas se declaran con la palabra clave "static:

// clase padre Persona
class Persona {
    // propiedad estatica
    public static $planeta = "Tierra";

    // usamos una propiedad estatica dentro de la clase
    public function saludar() {
        return "Hola soy del planeta " . self::$planeta;
    }
}

// clase hija Astronauta
class Astronauta extends Persona {
    // usamos una propiedad estatica del padre
    public function despedirse() {
        return "Hola estoy saliendo del planeta " . parent::$planeta;
    }
}

// pruebas
echo Persona::$planeta; 
echo "<br>";
echo (new Persona)->saludar();
echo "<br>";
echo (new Astronauta)->despedirse();

?>