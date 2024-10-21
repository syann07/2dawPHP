<?php
declare("strict_types=1");
    class Gerente extends Trabajador{
        public function __construct(
            private float $salario=1300) {
                parent::__construct($telefonos);
            }

        public function  calcularSueldo():float{
            $this->salario + ($this->salario*parent::$edad/100);
        }
    }
?>