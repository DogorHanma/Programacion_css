<?php
class Persona {
    public function __construct($nombre, $apellido, $edad, $pasatiempo) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->pasatiempo = $pasatiempo;
    }
    private $nombre;
    private $apellido;
    private $edad;
    private $pasatiempo;

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getPasatiempo() {
        return $this->pasatiempo;
    }

    public function setPasatiempo($pasatiempo) {
        $this->pasatiempo = $pasatiempo;
    }

    function mayorEdad(){
        return $this->edad >= 18 ? 'si':'no';
    }
   
}

$persona = new Persona('John', 'Doe', 18, 'Reading');
$persona->setEdad(18);
echo $persona->mayorEdad();
echo "<br>";

?>