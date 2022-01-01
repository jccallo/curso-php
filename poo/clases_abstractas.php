<?php

// definicion de clase abstracta:
// Una clase abstracta es una clase que contiene al menos un método abstracto. 
// Un método abstracto es un método que se declara, pero no se implementa su cuerpo. 
// Una clase o método abstracto se define con la palabra clave "abstract"

// Reglas para definir una clase abstracta:
// El método de la clase hija  debe definirse con el mismo nombre para redeclarar el método abstracto del padre. 
// El método de la clase secundaria debe definirse con el mismo modificador de acceso o con uno menos restringido. 
// El número de argumentos requeridos debe ser el mismo. Sin embargo, la clase secundaria puede tener argumentos adicionales.

// modelo de una clase abstracta
abstract class ClasePadre {
    abstract public function metodo1();
    abstract public function metodo2($parametro1, $parametro2);
    abstract public function metodo3() : string;
}

// clase padre abstracta
abstract class Auto {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // metodo abstracto publico
    abstract public function presentarse() : string;

    // metodo abstracto protegido con un parametro
    abstract protected function arrancar($estado);

    // metodo abstracto protegido con un parametro
    abstract protected function recorrer($avenida) : string;
}
  
// clase hija
class Ford extends Auto {
    // implementa el cuerpo del metodo abstracto publico
    public function presentarse() : string {
        return "¡Presentando... Auto $this->nombre!";
    }

    // implementa el cuerpo del metodo abstracto protegido 
    //  lo implementa como publico
    public function arrancar($estado) {
        return "¡Arrancando... Auto $estado!";
    }
    
    // implementa el cuerpo del metodo abstracto protegido 
    // lo implementa como publico
    // agrega un parametro adicional PERO TIENE QUE ESTAR INICIALIZADO
    public function recorrer($avenida, $distrito = "Lima") : string {
        return "¡Recorriendo... Auto en la av. $avenida de $distrito!";
    }
}
  
// creamos un objeto de la clase hija
$auto = new Ford("Modelo Ford");
echo $auto->presentarse();
echo "<br>";
echo $auto->arrancar("Estado Nuevo");
echo "<br>";
echo $auto->recorrer("Aviacion", "San Borja");

?>