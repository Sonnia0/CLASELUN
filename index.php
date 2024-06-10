<?php
$compras=array("arroz","carne","cafe","pizza");
foreach ($compras as $detalle){
    echo "el listado de compras es: $detalle<br>";
}


$tipoCafe=array(
    "mocachino"=>50,
    "capuchino"=>70,
    "colombiano"=>90,
    "americano"=>80);
    foreach ($tipoCafe as $nombre=> $precio){
        echo "El $nombre tiene un precio de $precio dolares <br>";
}

//Sirve para separar
//todo un bloque de
//código, ponerle un
//nombre, y utilizarla
//cuantas veces
//queramos sin
//preocuparnos por
//cómo trabaja por
//dentro

function get_pokemon(){
    $numero_aleatorio = rand(1, 5);
    switch ($numero_aleatorio){
        case 1:
            echo "Pikachu <br>";
            break;
        case 2: 
            echo "Charmander <br>";
            break;
        case 3:
            echo "mewtwo <br>";
            break;
            default:
            echo "lo siento, no hay ningun pokemos para ti <br>";
    }
    
}

for ($i=0; $i < 20; $i++) {
    get_pokemon();
}



//Parámetros en las funciones

function buscar_dia($dia_buscado){
    $dia_buscado = strtolower($dia_buscado);
    $dia_buscado = ucfirst($dia_buscado);

    $dia = array(
        "Lunes" => "Monday",
        "Martes" => "Tuesday",
        "Miercoles" => "Wednesday",
        "Jueves" => "Thursday",
        "Viernes" => "Friday",
        "Sabado" => "Saturday",
        "Domingo" => "Sunday"

    );
    foreach($dia as $español => $ingles){
        if($dia_buscado === $español){
            echo "\n\t El dia $dia_buscado se escribe en ingles $ingles";
            break;
        }
    }


}

$dia_buscado = "Jueves";

buscar_dia($dia_buscado);


//Inicializar parámetros

function sumar($a, $b){
    $resp=$a+$b;
    echo "El resultado de la suma de $a + $b = $resp";
}

sumar(4,5);

function sumar($a, $b){
    $resp=$a+$b;
    echo "El resultado de la suma de $a + $b = $resp";
}

sumar(4);


function sumar($a=0 , $b=0){
    $resp=$a+$b;
    echo "El resultado de la suma de $a + $b = $resp";
}

sumar(10);

//Parámetros dinámicos

function sumar($a=0, $b=0){
    $resp=$a+$b;
    echo "El resultado de la suma de $a + $b; $resp";
}
$arreglos=[1,2];
sumar(...$arreglos);

//Array unpacking
$arreglo1=[1,2,3];
$areglo2=[4,5,6];
$arreglos=[...$arreglo1...$arreglo2];
var_dump($arreglos);