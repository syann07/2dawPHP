<?php

include_once("247ok.php");
include_once("247ko.php");


    $usuarios = ["syan07" => "syan0707", "zascan" => "zas", "chupa" => "chupapa"];

    if(isset($_GET["user"]) && !empty($_GET["user"]) || isset($_GET["password"]) && !empty($_GET["password"])){
        $user = $_GET["user"];
        $passwd = $_GET["password"];

        //if (array_key_exists($user, $usuarios))
        if (isset($usuarios[$user])) {

            if ($usuarios[$user] === $passwd) {
                //header("Location: 'Location: ok.php?$usuario&$password')   Así solo tenemos que poner en ok.php lo que queremos imprimir
                imprimirBien();
            } else {
               imprimirMalContrasenia();
               redirect();
            }
        } else {
            imprimirMalUsuario();
        }
    
    }else{
        echo "No has introducido datos.";
    }
    
?>
