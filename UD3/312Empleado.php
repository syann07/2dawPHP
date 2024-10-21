<?php
    declare(strict_types=1);
    include_once("312Trabajador.php");
    class Empleado extends Trabajador {
        private static $sueldoTope=3333;

        public function __construct(
            private float $sueldo=1000,
            private int $horasTrabajadas=0,
            private float $precioHora=0;
            ) {
                parent::__construct($telefonos);
            }
        
        public function calcularSueldo(): float{
            return $this->horasTrabajadas*$this->precioHora;
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
            if(!empty($teñefonos)){
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

        function public __toString(): string{
            return "<p> Nombre:". parent::getNombreCompleto(). ". Sueldo: ". $this->getSueldo(). ". Telefonos: ". $this->listarTelefonos()."</p>"
        }
    }

?>