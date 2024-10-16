<?php
declare(strict_types=1);
class Empleado{

    private string $nombre;
    private string $apellido;
    private float $sueldo;
    private $telefonos = [];

    public function __construct(string $nombre, string $apellido, float $sueldo){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->sueldo=$sueldo;
        //$this->telefonos= array();
    }

    //Getters
    public function getSueldo():string{
        return $this->sueldo;
    }
    public function getNombre():string{
        return $this->nombre;
    }
    public function getApellido():string{
        return $this->apellido;
    }

    //Setters
    public function setSueldo(float $sueldo){
        return $this->sueldo;
    }
    public function setNombre(string $nombre){
        return $this->nombre;
    }
    public function setApellido(string $apellido){
        return $this->apellido;
    }

    public function  getNombreCompleto(): string {
        return "Mi nombre es: ". $this->nombre . " ". $this->apellido;
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    public function aniadirTelefono(int $telefono): void {
        //$this->telefonos[] = $telefono;
        array_push($this->telefono, $telefono);
    }

    public function listarTelefonos(): string {
        $res="";
        foreach( $this->telefonos as $telefono ){
            $res = $res . $telefono .", ";
        }
        return $res;
        //implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        //$this->telefonos = [];
        $this->telefonos = array();
    }
}

$emp1 = new Empleado("Daniel", "Lopez",5646);
echo $emp1->getNombreCompleto();
echo "<br>";
$emp1->aniadirTelefono(667476389);
$emp1->aniadirTelefono(689309650);
$emp1->aniadirTelefono(612893400);

echo "Listado de telefonos: ";
echo $emp1->listarTelefonos();

echo "<br>";
echo $emp1->debePagarImpuestos()?"Debe pagar impuestos":"No debe pagar impuestos";
?>