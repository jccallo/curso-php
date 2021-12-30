<?php

// definimos la clase Persona
class Persona {
    // propiedades
    private $nombre;

    // constructor
    # Un constructor le permite inicializar las propiedades de un objeto al crearlo
    # Si crea una función __construct (), PHP lo llamará automáticamente cuando cree un objeto
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // destructor
    // Se llama cuando se destruye el objeto o se detiene o sale del script. 
    // Si crea una función __destruct (), PHP lo llamará automáticamente al final del script
    public function __destruct() {
        echo "<br>La persona se llamaba {$this->nombre}";
    }

    // metodos
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) { 
        $this->nombre = $nombre;
    }
}

// instancia de la clase
$persona = new Persona("Armando");
$nombre = $persona->getNombre();

// imprimimos el nombre
echo "Hola, soy $nombre";
echo "<br>Hola, soy {$persona->getNombre()} otra vez";

?>