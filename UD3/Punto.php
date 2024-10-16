<?php

class Punto{
  /*  protected float $x;
    protected float $y;
    protected float $z;
             //Valores por defecto (el dato podría estar vacio)
    public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0
    ){
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }*/

    //forma simplificada
    public function __construct(
        protected float $x = 0.0,
        protected float $y = 0.0,
        protected float $z = 0.0
    ){}

}


?>