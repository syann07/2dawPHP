<?php
    declare(strict_types=1);
    abstract class Persona {
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

    public static function toHtml(Persona $p): string{
        $cadena = "<p>Nombre del empleado: " . $p->getNombreCompleto()."</p>";
        $cadena .= "<p>Sueldo: " . $p->getSueldo() ."</p>";

        $telefonos = $p->getTelefonos();
        if(!empty($telefonos)){
            $cadena .= "<ol>";
            foreach($telefonos as $telefono){
                $cadena .= "<li>". $telefono . "</li>";
            }
            $cadena .= "</ol>";
        }else{
            $cadena .= "<p>No hay telefonos registardos</p>";
        }
        return $cadena;
    }
    }
?>