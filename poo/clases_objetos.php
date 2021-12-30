<?php

// modificadores de acceso: public, protected y private
# public: se puede acceder a la propiedad o al método desde cualquier lugar. Esto es predeterminado 
# protegido: se puede acceder a la propiedad o método dentro de la clase y mediante clases derivadas de esa clase 
# privado: SOLO se puede acceder a la propiedad o al método dentro de la clase

// definimos la clase Persona
class Persona {
    // propiedades
    # si no se coloca algun modificador, arroja error
    # si no se inicializa por default su valor es NULL
    private $nombre = "Armando";

    // metodos
    public function getNombre() {
        return $this->nombre;
    }
    # si no se especifica modificador a la funcion, por default es public
    function setNombre($nombre) { 
        $this->nombre = $nombre;
    }
}

// instancia de la clase
$persona = new Persona();

// cambiamos el nombre
$persona->setNombre("Angel");

// obtenemos el nombre
$nombre = $persona->getNombre();

// imprimimos el nombre
echo "Hola, soy $nombre";

?>