<?php

// modificadores de acceso: public, protected y private
# publico: se puede acceder a propiedades o métodos desde dentro de la clase, clases derivadas y afuera). Esto es predeterminado 
# protegido: se puede acceder a propiedades o métodos desde dentro de la clase y clases derivadas de esa clase, no desde fuera
# privado: se puede acceder a propiedades o métodos desde dentro de la clase

// clases hijas
# no se puede heredar propiedades y metodos privados
# se puede heredar propiedades y metodos publicos y protegidos, asi usarlos solo desde dentro de clases hijas
# las instancias de la clase hija no pueden acceder directamente a propiedades y metodos protegidos heredados por dicha clase hija 
# porque dichos objetos de la clase hija estan fuera del cuerpo de la clase hija

class Persona {
    // propiedades privadas: accedidas desde el cuerpo de la clase
    private $nombre;
    private $edad;
    private $dni;

    public function __construct($nombre, $edad, $dni) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
    }

    // metodo publico: accedido desde el cuerpo de la clase, desde la clase hija y fuera de dichas clases
    public function getNombre() {
        return $this->nombre;
    }

    // metodo protegido: accedido desde el cuerpo de la clase y desde la clase hija
    protected function getEdad() {
        return $this->edad;
    }

    // metodo privado: accedidas desde el cuerpo de la clase
    private function getDni() {
        return $this->dni;
    }
}

// clase Estudiante
# hereda los metodos publicos y protegidos, pero no los privados
class Estudiante extends Persona {
    public function saludar() {
        echo "Hola soy {$this->getNombre()} y tengno {$this->getEdad()} años"; 
    }
}

// objeto estudiante
$estudiante = new Estudiante("Armando", 30, 87654321);

// accedemos a un metodo publico
$estudiante->saludar(); 

// accedemos a un metodo publico heredado
echo "<br>" . $estudiante->getNombre(); 

// ERROR: no se puede acceder a un metodo protegido heredado desde fuera de la clase hija
echo $estudiante->getEdad(); 

// ERROR: no se puede acceder a un metodo privado porque no lo hereda
echo $estudiante->getDni(); 

?>