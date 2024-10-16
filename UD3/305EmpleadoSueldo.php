<?php
    declare(strict_types=1);
    class Empleado {
        private static float $sueldoTope=3333;

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
    }
    
    $em1=new Empleado("Daniel", "Lorca");
    $em1->setSueldoTope(5000);
    echo $em1->debePagarImpuestos()?"PAGA":"No pagues guapeton";
    echo "<br>";
    $em1->aniadirTelefono(666333888);
    $em1->aniadirTelefono(662778330);
    echo $em1->listarTelefonos();

    $em1->vaciarTelefonos();
    $em1->aniadirTelefono(666333888);
    $em1->aniadirTelefono(662778330);
    echo $em1->listarTelefonos();

?>