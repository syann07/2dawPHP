<?php
    declare(strict_types=1);

    function pesetas2euros(float $cantidad, float $cotizacion=166.36):float{
       return $cantidad/$cotizacion;
    }

    function euros2pesetas(float $cantidad, float $cotizacion=166.36):float{
        return $cantidad*$cotizacion;
     }
 

    
?>