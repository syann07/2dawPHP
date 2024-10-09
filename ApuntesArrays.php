<?php
    
    $frutas = array("naranja", "pera", "manzana");
    $frutas2 = ["naranja", "pera", "manzana"];

    $frutas3 = [];
    //añadimos elementos por índice
    $frutas3[0] = "naranja";
    $frutas3[1] = "pera";
    $frutas3[] = "manzana"; // lo añade al final
    // tamaño del array
    $tam = count($frutas); 
    //Recorremos los elementos del array mediante un for
    for ($i=0; $i<count($frutas); $i++) {
        echo "Elemento $i: $frutas[$i] <br />";
    }
    // Mediante foreach no necesitamos saber el tamaño del array
    foreach ($frutas as $fruta) 
        echo "$fruta <br />";

    //array asociativos
    $capitales = ["Italia" => "Roma",
                    "Francia" => "Paris",
                     "Portugal" => "Lisboa"];
    // se accede al elemento por la clave, no la posición
    $capitalFrancia = $capitales["Francia"]; 

    // añadimos un elemento
    $capitales["Alemania"] = "Berlín"; 

    echo "La capital de Francia es $capitalFrancia <br />";
    echo "La capital de Francia es {$capitales["Francia"]} <br />";

    // se añade con la clave 0 !!! ¡¡¡No asignar valores sin clave!!!
    $capitales[] = "Madrid"; 

    // si recorremos un array asociativo, mostraremos los valores
    foreach ($capitales as $valor) { 
        echo "$valor <br />";
    }

    // separamos cada elemento en clave => valor
    foreach ($capitales as $pais => $ciudad) { 
        echo "$pais : $ciudad <br />";
    }

    
    array_push($frutas, "piña");
    print_r($frutas);

    $ultFruta = array_pop($frutas);
    if (in_array("piña", $frutas)) {
        echo "<p>Queda piña</p>";
    } else {
        echo "<p>No queda piña</p>";
    }
    print_r($frutas);
    echo '</br>';

    $capitales = array("Italia" => "Roma",
                        "Francia" => "Paris",
                        "Portugal" => "Lisboa");

    $paises = array_keys($capitales);
    print_r($paises);
    sort($paises);
    echo '</br>';
    print_r($paises);
    echo '</br>';
    unset($capitales["Francia"]);
    print_r($capitales);
    echo '</br>';

    //copia de arrays
    $nombres = ["Juan", "Ana", "Pedro", "Laura"];
    $copia = $nombres;
    sort($nombres);
    print_r($nombres);
    echo '</br>';
    print_r($copia);
    echo '</br>';
    
    //arrays bidimensionales
    $persona["nombre"] = "Bruce Wayne";
    $persona["telefonos"] = ["966 123 456", "636 636 636"]; // array de arrays ordinarios
    $persona["profesion"] = ["dia" => "filántropo", "noche" => "caballero oscuro"]; // array de arrays asociativos

    echo $persona['nombre']." por la noche trabaja de ".$persona['profesion']['noche'];
    echo '</br>';

    //arrays asociativos con varias dimensiones
    $menu1 = ["Plato1" => "Macarrones con queso", "Plato2" => "Pescado asado", "Bebida" => "Coca-Cola", "Postre" => "Helado de vainilla"];
    $menu2 = ["Plato1" => "Sopa", "Plato2" => "Lomo con patatas", "Bebida" => "Agua", "Postre" => "Arroz con leche"];
    $menus = [$menu1, $menu2]; // creamos un array a partir de arrays asociativos

    foreach ($menus as $menudeldia) {
        echo "Menú del día<br/>";

        foreach ($menudeldia as $platos => $comida) {
            echo "$platos: $comida <br/>";
        }
    }

    // Para acceder a un elemento concreto se anidan los corchetes
    $postre0 = $menus[0]["Postre"];




?>
 