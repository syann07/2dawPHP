<?php
declare (strict_types=1);
abstract class ProductoAbs{
    private  string $codigo;

    public function getCodigo():string{
         return $this->codigo;
    }

    public function setCodigo(string $codigo):void{
        $this->codigo = $codigo;
    }
    abstract public function mostrarResumen();
}

?>