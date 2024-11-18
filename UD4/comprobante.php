<?php

if(isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir'){
    if( is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])){
        //subido con éxito
        //con el microtime evito que dos archivos con el mismo nombre se superpongan poniendo los microsegundos
        $nombre = microtime()."_".$_FILES['archivoEnviado']['name'];
        move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./descargas/{$nombre}");

        echo "<p>Archivo $nombre subido con éxito</p>";
    }
}
?>