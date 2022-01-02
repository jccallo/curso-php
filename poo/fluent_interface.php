<?php

// fluent interface:
// nos permite llamar metodos de manera encadenada sin repetir el nombre del mismo objeto

// calse persona
class Persona {
    private $nombre;
    private $edad;
    private $dni;

    public function __construct($nombre, $edad, $dni) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
        return $this;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function saludar() {
        echo "Hola soy {$this->nombre}<br>";
        echo "Mi edad es {$this->edad}<br>";
        echo "Mi dni es {$this->dni}<br><br>";
    }
}

// objeto estudiante
$persona = new Persona("Armando", 30, 87654321);
$persona->saludar();

// aplicamos fluent interface
$persona->setNombre("Angel")
           ->setEdad(27) 
           ->setDni(12345678)
           ->saludar();

?>