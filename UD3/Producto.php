<?php

class Producto{

    const IVA = 0.23;
    private $codigo;
    private static $numProductos=0;

    public function __construct(string $cod){
        self:: $numProductos++;
        $this->codigo=$cod;
    }
    public function mostrarResumen():string{
        return "El producto ". $this->codigo. " es el numero ". self::$numProductos;
    }
}

/*Al ser estatico acceden al mismo espacio de memoria 
y se actualiza la propiedad, en cambio se crean 3 codigos distintos,
uno por cada producto.*/
$prod1= new Producto("Peras");
$prod2= new Producto("Limones");
$prod3= new Producto("Fresas");
echo $prod2->mostrarResumen();

/*  Ligadura dinámica: En un ArrayList de instancias de <Vehiculo> 
    (coche c1, coche c2, moto m1, camion cam1)
    al recorrer el array y usar los métodos sobreescritos, usará los 
    metodos propios de cada instancia y si encuentra una sin dicho método
    usará el metodo de la clase padre.
*/
?>