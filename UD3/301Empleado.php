<?php
    declare(strict_types=1);
    class Empleado{

        private string $nombre;
        private string $apellidos;
        private float $sueldo;

        public function __construct(string $nombre, string $apellidos, float $sueldo){
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->sueldo=$sueldo;
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
            return "Mi nombre es: ". this->nombre . " ". this->apellido;
        }

        public function debePagarImpuestos(): bool {
            return this->sueldo > 3333;
        }

    }
?>