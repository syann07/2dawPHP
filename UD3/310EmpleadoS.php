<?php
    declare(strict_types=1);
    include_once("310Persona.php");
    class Empleado extends Persona {
        private $sueldoTope;
        private $telefonos = array();

        public function __construct(
            private string $nombre,
            private string $apellido,
            private string $edad,
            private float $sueldo=1000) {
                parent::__construct($nombre, $apellidos, $edad);
                $this->$sueldoTope = 3333;
            }

        public function getSueldo(): float {
            return $this->sueldo;
        }
        public function setSueldoTope(float $sueldoTope): void {
            $this->$sueldoTope = $sueldoTope;
        } 

        public function getSueldoTope(): float {
            return self::$sueldoTope;
        }

        public function setSueldo(float $sueldo): void {
            $this->sueldo = $sueldo;
        }

        public function debePagarImpuestos(): bool {
            if($this->edad >=21){
             return $this->sueldo > self::$sueldoTope;
            }
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
        }

        public function __toString(): string {
            return "<p> Nombre:". parent::getNombreCompleto(). ". Sueldo: ". $this->getSueldo(). ". Telefonos: ". $this->listarTelefonos()."</p>";
        }
    }

?>