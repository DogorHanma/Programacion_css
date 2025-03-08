<?php
function saludar($nombre){
    return "Hola ". $nombre;
}

function getSaludo(){
    return "Hola";
}

echo getSaludo(). "<br>";

function saludarDos($nombre){
    echo "hola $nombre. <br>";
}

saludarDos("Juan");

function saludarTres($nombre, $apellido){
    echo "hola $nombre $apellido. <br>";
}

saludarTres("Juan", "Perez");

function saludarCuatro($nombre, $apellido = ''){
    if (empty($apellido)) {
        echo "hola $nombre. <br>";
    } else {
        echo "hola $nombre $apellido. <br>";
    }
}

saludarCuatro("Juan", "Perez");
saludarCuatro('Jana');

function saludarCinco(...$params){
    $nombre = $params[0];
    $apellido = $params[1];
    $edad = $params[2];
    echo "hola $nombre $apellido. <br>";
}

saludarCinco("Juan", "Perez", 23, 1.87, false);

function saludarSeis(string $nombre){
    echo "hola $nombre. <br>";
}




?>