<?php

require_once 'UsuarioCorreo.php';

class Docente extends UsuarioCorreo {

    private $gradoAcademico;
    private $antiguedad;

    public function __construct(
        $nombre,
        $apellidoPaterno,
        $apellidoMaterno,
        $edad,
        $departamento,
        $gradoAcademico,
        $antiguedad
    ) {

        parent::__construct(
            $nombre,
            $apellidoPaterno,
            $apellidoMaterno,
            $edad,
            $departamento
        );

        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }

    public function cambiarGradoAcademico($nuevoGradoAcademico) {
        $this->gradoAcademico = $nuevoGradoAcademico;
    }

    public function cambiarAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }

    public function obtenerGradoAcademico() {
        return $this->gradoAcademico;
    }

    public function obtenerAntiguedad() {
        return $this->antiguedad;
    }

    public function obtenerNombreCompleto() {

        return "{$this->gradoAcademico} {$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }
}

?>