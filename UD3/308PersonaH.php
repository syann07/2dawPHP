<?php
    declare(strict_types=1);
    class Persona {
        private static $sueldoTope=3333;
        //dani
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

        public static function toHtml(Persona $p): string{
            $cadena = "<p>Nombre del empleado: " . $emp->getNombreCompleto ."</p>";
            $cadena .= "<p>Sueldo: " . $emp->getSueldo ."</p>";

            $telefonos = $emp->getTelefonos();
            if(!empty($teñefonos)){
                $cadena .= "<ol>";
                foreach($telefonos as $telefono){
                    $cadena .= "<li>";
                    $cadena .= $telefono . ", ";
                    $cadena .= "</li>";
                }
                $cadena .= "</ol>";
            }else{
                $cadena .= "<p>No hay telefonos registardos</p>";
            }
            return $cadena;
        }
    }

?>