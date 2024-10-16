<?php
class Tv extends ProductoAbs{

    public function __construct(
        string $codigo,   //la visibilidad ya está declarada en la clase padre
        public int $pulgadas, 
        public string $tecnologia){
            this->setCodigo($codigo);
        }

    public function mostrarResumen(){
        echo "<p>Código " . $this->getCodigo() . "</p>";
        echo "La tecnología es de " . $this->tecnologia . " y de " . this->pulgadas . "pulgadas";
    }
}

$tv = new Tv("LG", 55, "QLED");
$tv->mostrarResumen();
?>