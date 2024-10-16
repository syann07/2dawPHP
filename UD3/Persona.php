<?php
declare(strict_types=1);
class Persona{
    private string $nombre;

    public function __construct(string $nom){
        $this->nombre=$nom;
    }
    public function imprimir(): void{
        echo "Mi nombre es: " . $this->nombre;
    }

}
$p = new Persona("Sonia");
$p->imprimir();
?>


