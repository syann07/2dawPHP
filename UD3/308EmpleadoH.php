<?php
    declare(strict_types=1);
    include_once("307Persona.php");

    class Empleado extends Persona{
        private static $sueldoTope=3333;

        public function __construct(
            super $nombre, $apellido,
            private float $sueldo=1000,
            private $telefonos = array()) {}

        public function getSueldo(): float {
            return $this->sueldo;
        }

        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        public function setSueldoTope(float $sueldoTope): void {
            self::$sueldoTope = $sueldoTope;
        } 

        public function getSueldoTope(): float {
            return self::$sueldoTope;
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

        public static function toHtml(Persona $p): string{
            if($p instanceof Empleado){
                $cadena = "<p>Nombre del empleado: " . $p->getNombreCompleto() ."</p>";
                $cadena .= "<p>Sueldo: " . $p->getSueldo() ."</p>";

                $telefonos = $p->getTelefonos();
                if(!empty($telefonos)){
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
            }else{
                return "Esa persona no es un empleado.";
            }
        }
        }

?>