<?php
   
    function imprimirMalContrasenia(){
        echo "Está mal la contraseña!";
    }
    function imprimirMalUsuario(){
        echo "Está mal el usuario!";
    }
    function redirect() {
        header('Location: '."247login.php"); 
		die();
}
?>