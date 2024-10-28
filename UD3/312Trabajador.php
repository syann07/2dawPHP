<?php
declare(strict_types=1);
    abstract class Trabajador extends Persona{
        public function __construct(
            string $nombre,
            string $apellido,
            int $edad,
            private $telefonos = array()) {
                parent::__construct($nombre, $apellido, $edad);
            }

        abstract public function  calcularSueldo();
    }
?>