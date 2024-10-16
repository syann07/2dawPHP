<?php
    declare(strict_types=1);
    class Persona {
        private static $sueldoTope=3333;

        public function __construct(
            private string $nombre, 
            private string $apellidos) {}

        public function getNombre(): string {
            return $this->nombre;
        }
        public function getApellidos(): string {
            return $this->apellidos;
        }

        public function getNombreCompleto(): string {
            return $this->nombre . " " .$this->apellidos;
        }
    }

?>