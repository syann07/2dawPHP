<?php
    declare(strict_types=1);
    class Empleado {
        private static $sueldoTope=3333;

        public function __construct(
            private string $nombre, 
            private string $apellidos, 
            private float $sueldo=1000,
            private $telefonos = array()) {}

        public function getNombre(): string {
            return $this->nombre;
        }
        public function getApellidos(): string {
            return $this->apellidos;
        }
        public function getSueldo(): float {
            return $this->sueldo;
        }
        public function setSueldoTope(float $sueldoTope): void {
            self::$sueldoTope = $sueldoTope;
        } 

        public function getSueldoTope(): float {
            return self::$sueldoTope;
        }

        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        public function getNombreCompleto(): string {
            return $this->nombre . " " .$this->apellidos;
        }

        public function getTelefonos(): array {
            return $this->telefonodos;
        }

        public function debePagarImpuestos(): bool {
            return $this->sueldo > self::$sueldoTope;
        }

        public function aniadirTelefono(int $tel) : void {
            array_push($this->telefonos, $tel);
        }

        public function listarTelefonos(): string {
            $res="";
            foreach($this->telefonos as $telefono){
                $res=$res . $telefono . ", ";
            }
            return $res;
        }

        public function vaciarTelefonos(): void{
            $this->telefonos = array();
        }

        public static function toHtml(Empleado $emp): string{
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