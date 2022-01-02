<?php

// atributos con nombre

// calse persona
class Persona {
    // definimos las propiedades el la definicion de parametros del constructor
    public function __construct(private $nombre, private $edad, private $dni) {
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function saludar() {
        echo "Hola soy {$this->nombre}<br>";
        echo "Mi edad es {$this->edad}<br>";
        echo "Mi dni es {$this->dni}<br><br>";
    }
}

// creamos el objeto persona pero indicando a cual parametro pertenece
// asi no tendremos problemas si enviamos los argumentos en diferente orden
// como se especifico en el construtor de la clase 
$persona = new Persona(dni: 87654321, edad: 30, nombre: "Armando");
$persona->saludar();

?>