<?php
declare(strict_types=1);
    class Gerente extends Trabajador{
        public function __construct(
            string $nombre,
            string $apellido,
            array $telefonos,
            private float $salario=1300) {
                parent::__construct($nombre, $apellido, $telefonos);
            }

        public function  calcularSueldo():float{
            $this->salario + ($this->salario*parent::$edad/100);
        }
    }
?>