<?php

$hostDB = "localhost";
$userDB= "root";
$passDB = "";
$nameDB = "programacion_avanzada_db1";
//$portDB = "3306";
$conexDB = new mysqli($hostDB, $userDB, $passDB, $nameDB);
if ($conexDB->connect_error) {
    die("Conexion fallida: " . $conexDB->connect_error);
}else {
    echo "Conexion exitosa <br>";
}   


 $sql = "SELECT * FROM estudiantes";
 $resultadoSQL = $conexDB->query($sql);
if ($resultadoSQL->num_rows > 0) {
    while ($fila = $resultadoSQL->fetch_assoc()) {
        echo "id: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . " " . $fila["codigo"] . " - Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "0 resultados";
}

$sql = "INSERT INTO estudiantes (nombre, codigo, email)
 VALUES ('Maria', '12453', 'maria@testt.com')";
 $resultadoSQL = $conexDB->query($sql);
 if ($resultadoSQL) {
     echo "Nuevo registro creado";
 } else {
     echo "Error";
 }



$conexDB->close();
