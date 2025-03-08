<?php
<<<<<<< HEAD
$nombre = "dogor";
$num= 3.2;

echo "Hola ". $nombre . "<br>" ;
echo "Hola ". $nombre . "<br>" ;
echo "Este es tu numero ". $num.  "<br>" ;
echo "la suma de tu numero ". $num ." con  20 es: ". $sum=$num+20;

$edad=23;
$altura=1.87;
$estudia= true;//falso

$numeros=[ 1,2,3,4,5,6,7,8,9,10];
$ejemplo=[ 1,"texto",15.6,true,[]];
echo $numeros[1]. "<br>";

$persona= [
    "nombre"=>"pepe",
    "apellido"=>"Gomez",
    "edad"=>35,
];

$jobs =null;
define("cien",100);
echo $persona["nombre"]. "<br>"; 
echo cien.'<br>';

$edad = 24;

if($edad>0 && $edad<=12){
    echo "eres un niño";
}else if($edad> 12&& $edad<= 17){
    echo "eres un adolescente";
}else if($edad> 18&& $edad<= 50){
    echo "eres un adulto";
}else{
    echo "eres un anciano";
}
echo "<br>";
$categotria = "a";  
switch($categotria){
    case "a":
        echo "eres un niño";
        break;
    case "b":
        echo "eres un adolescente";
        break;
    case "c":
        echo "eres un adulto";
        break;
    default:
        echo "eres un anciano";
        break;
}

$esMayorEdad = $edad >= 18 ? 'si':'no';


$pares=[];
$impares=[];

echo "<br>";
for($i= 0; $i<= 9; $i++)
{
    $numero = $numeros[$i];
    if($numero % 2 == 0){
        array_push($pares,$numero);
        $impares[]=$numero;
    }else{
        array_push($impares,$numero);
    }
}
var_dump($impares);
echo'<br>';
var_dump($pares);

$i = 0  ;
do{
    $numero = $numeros[$i];
    if($numero % 2== 1){
        array_push($impares,$numero);
    }else{
        array_push($pares,$numero);
    }
    $i++;
}while($i<10);

var_dump($impares);
echo'<br>';
var_dump($pares);

foreach($numeros as $numero)
{
    if($numero % 2== 1){
        array_push($impares,$numero);
    }else{
        array_push($pares,$numero);
    }
}

var_dump($impares);
echo '<br>';
var_dump($pares);

?>
=======
echo"hola mundo";

$name="pepe";

echo"hola .$name.";

?>
>>>>>>> 35f2d21da292b3f35bd5aab0096242d430e1d9ab
