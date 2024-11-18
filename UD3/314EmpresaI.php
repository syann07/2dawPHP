<?php

interface JSerializable{

    public function toJSON(): string;
    //     foreach($this as $clave => $valor){
    //         $mapa -> $clave = $valor;
    // }
    // return json_encode($mapa);
    
    public function toSerialize(): string;
}

?>