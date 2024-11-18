<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir'){
        //no hace falta comprobar que se hayan rellenado los campos porque se ha usado required
    
            $anchura = $_POST['anchura'];
            $altura = $_POST['altura'];
            //Comprobamos que se adjunte el archivo
            if(is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])){     //tmp_name ya existe por defecto (nombre temporal)
                //subido con éxito
                //con el microtime evito que dos archivos con el mismo nombre se superpongan poniendo los microsegundos
                $nombre = microtime()."_".$_FILES['archivoEnviado']['name'];
                move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./descargas/{$nombre}");

                echo "<p>Archivo $nombre subido con éxito</p>";
            }
            else{echo "Archivo no adjunto";}
    }
}else{ echo "Acceso no autorizado";}

?>