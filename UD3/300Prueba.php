<?php

include("306EmpleadoStatic.php");

       
$em1=new Empleado("Daniel", "Lorca");
$em1->setSueldoTope(5000);
echo $em1->debePagarImpuestos()?"PAGA":"No pagues guapeton";
echo "<br>";
$em1->aniadirTelefono(666333888);
$em1->aniadirTelefono(662778330);
echo $em1->listarTelefonos();

$em1->vaciarTelefonos();
$em1->aniadirTelefono(666333888);
$em1->aniadirTelefono(662778330);
echo $em1->listarTelefonos();
echo Empleado::toHtml($em1);

?>