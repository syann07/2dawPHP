<?php
    declare(strict_types=1);
    class Persona {
        public function __construct(
            private string $nombre, 
            private string $apellidos,
            private int $edad) {}
    

    public function getNombre(): string {
        return $this->nombre;
    }
    public function getApellidos(): string {
        return $this->apellidos;
    }
    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }
    public function getEdad(): int {
        return $this->edad;
    }
    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }
    public function setApellidos(string $apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function getNombreCompleto(): string {
        return $this->nombre . " " . $this->apellidos;
    }
}
?>