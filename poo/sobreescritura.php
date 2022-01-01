<?php

// clase Persona
class Persona {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar1() {
        echo "Hola soy {$this->nombre}"; 
    }

    public function saludar2() {
        echo "<br>Bienvenido me llamo {$this->nombre}"; 
    }
}

// clase Estudiante
class Estudiante extends Persona {
    private $edad;

    public function __construct($nombre, $edad) {
        // parent::__construct($nombre);
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // sobreescritura completa del cuerpo
    public function saludar1() {
        echo "Hola soy {$this->nombre} y tengo {$this->edad} años"; 
    }

    // sobreescritura pero aprovechando lo que ya hacia su cuerpo
    // lo mismo se puede hacer sobreescribiendo __constructor
    public function saludar2() {
        parent::saludar2();
        echo " y mi edad es {$this->edad} años"; 
    }
}

// objeto estudiante
$estudiante = new Estudiante("Armando", 30);
$estudiante->saludar1(); 
$estudiante->saludar2(); 

/*
    IMPORTANTE:
    se puede agregar al comienzo de una clase la palabra clave "final"
    esto hace que ninguna clase pueda heredar de esa clase 
    
    si se hace lo mismo con un metodo de una clase
    esto hace que no se pueda sobreescribir ese metodo
*/

?>