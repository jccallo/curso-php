<?php

// clase Persona
class Persona {
    protected $nombre;

    // definimos una constante con la palabra clave "const"
    // el nombre debe estar en mayusculas separados por guiones bajos
    // podemos aplicar mofificadores acceso si queremos
    const IDIOMA_NATIVO = "Español"; 

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar() {
        echo "Hola soy {$this->nombre}" . "<br>"; 

        // desde dentro de la clase accedemos a la constante por medio de "self::"
        echo "Mi idioma nativo es el " . self::IDIOMA_NATIVO; 
    }
}

// objeto Persona
$persona = new Persona("Armando");
$persona->saludar(); 

// desde fuera de la clase accedemos a la constante por medio de "NombreDeLaClase::"
echo "<br>Mi idioma nativo es el " . Persona::IDIOMA_NATIVO;

?>