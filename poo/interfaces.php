<?php

// diferencias entre interfaces y clases abstractas:
// Las interfaces no pueden tener propiedades, mientras que las clases abstractas pueden 
// Todos los métodos de interfaz deben ser públicos, mientras que los métodos de clase abstracta son públicos o están protegidos 
// Todos los métodos en una interfaz son abstractos, por lo que no se pueden implementar en código y la palabra clave abstracta no es necesaria 
// Las clases pueden implementar una interfaz y ser hija de otra clase al mismo tiempo

// modelo de una interfaz
interface NombreInterfaz {
    public function metodo1();
    public function metodo2($parametro1, $parametro2);
    public function metodo3() : string;
}

// interfaz Persona
interface Persona {
    public function saludar();
}
  
// Clases que implemtan de la clase Persona
class Estudiante implements Persona {
    public function saludar() {
        echo "Hola soy un estudiante" . "<br>";
    }
}
  
class Profesor implements Persona {
    public function saludar() {
        echo "Hola soy un profesor" . "<br>";
    }
}
  
class Director implements Persona {
    public function saludar() {
        echo "Hola soy un director" . "<br>";
    }
}
  
// Create a list of animals
$estudiante = new Estudiante();
$profesor = new Profesor();
$director = new Director();
$personas = array($estudiante, $profesor, $director);

// Tell the animals to make a sound
foreach($personas as $persona) {
    $persona->saludar();
}

?>