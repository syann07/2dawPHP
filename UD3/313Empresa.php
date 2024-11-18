<?php
class Empresa {
    private $nombre;
    private $direccion;
    private $trabajadores;

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->$trabajadores = [];
    }

    public function getNombre(): string {
        return $this->nombre;
    }


    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }


    public function getDireccion(): string {
        return $this->trabajadores;
    }
    
    public function getTrabajadores(): array {
        return $this->direccion;
    }


    public function setDireccion(string $direccion) {
        $this->direccion = $direccion;
    }

    public function anyadirTrabajador(Trabajador $trabajador): void {
        $this->trabajadores[] = $trabajador;
        //$this->getTrabajadores()[] = $trabajador;
    }

    public function listarTrabajadoresHtml(): string {
        $html = "<h1>Trabajadores en la empresa</h1>";
        foreach ($this->trabajadores as $trabajador) {
            $html .= Trabajador::toHtml($trabajador);
        }
        return $html;
    }

    public function getCosteNominas(): float {
        $totalCoste = 0.0;
        foreach ($this->trabajadores as $trabajador) {
            $totalCoste += $trabajador->calcularSueldo();
        }
        return $totalCoste;
    }
}

$empresa = new Empresa("Empresa1", "123 Calle Principal");
$empleado1 = new Empleado("Juan", "Pérez", 2000);
$gerente1 = new Gerente("Ana", "García", 3000, 1000);


$empresa->anyadirTrabajador($empleado1);
$empresa->anyadirTrabajador($gerente1);


echo $empresa->listarTrabajadoresHtml();
echo "Coste total en nóminas: " . $empresa->getCosteNominas();
?>
