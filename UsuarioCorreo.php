<?php

abstract class UsuarioCorreo {

    private static $contadorId = 1;

    protected $id;
    protected $nombre;
    protected $apellidoPaterno;
    protected $apellidoMaterno;
    protected $edad;
    protected $departamento;

    public function __construct(
        $nombre,
        $apellidoPaterno,
        $apellidoMaterno,
        $edad,
        $departamento
    ) {

        $this->id = self::$contadorId++;

        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }

    public function cambiarNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function cambiarEdad($nuevoEdad) {
        $this->edad = $nuevoEdad;
    }

    public function cambiarDepartamento($nuevoDepartamento) {
        $this->departamento = $nuevoDepartamento;
    }

    public function obtenerId() {
        return $this->id;
    }

    public function obtenerEdad() {
        return $this->edad;
    }

    public function obtenerDepartamento() {
        return $this->departamento;
    }

    abstract public function obtenerNombreCompleto();
}

?>