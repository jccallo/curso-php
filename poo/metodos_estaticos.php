<?php

// definicion de un metodo estatico:
// Los métodos estáticos se pueden llamar directamente, sin crear primero una instancia de la clase
// Los métodos estáticos se declaran con la palabra clave "static"

// clase padre Persona
class Persona {
    // metodo estatico
    public static function obtenerPlaneta() {
        return "Tierra";
    }

    // usamos un metodo estatico dentro de la clase
    public function saludar() {
        return "Hola soy del planeta " . self::obtenerPlaneta();
    }
}

// clase hija Astronauta
class Astronauta extends Persona {
    // usamos un metodo estatico del padre
    public function despedirse() {
        return "Hola estoy saliendo del planeta " . parent::obtenerPlaneta();
    }
}

// pruebas
echo Persona::obtenerPlaneta(); 
echo "<br>";
echo (new Persona)->saludar();
echo "<br>";
echo (new Astronauta)->despedirse();

?>