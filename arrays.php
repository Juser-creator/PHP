<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<title>Arrays en PHP Pau Hernandez</title>
<h1>Ejercicio1 PauH:</h1>

<?php
$datos = array( "nombre" => "Sara", "apellido"=> "Martinez", "edad" => 23, "ciudad" => "Barcelona");

$counter = 1;
foreach ($datos as $valor) {
    echo "dato ". $counter . "º: " . $valor . "<br>";
    $counter++;
}
?>

<h1>Ejercicio2 PauH:</h1>

<?php
$datos = array( "nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona");

$counter = 1;
foreach ($datos as $key => $valor) {
    echo $key. $counter . ": " . $valor . "<br>";
    $counter++;
}


    ?>
    <h1>Ejercicio3 PauH:</h1>
<?php
    $datos = array( "nombre" => "Sara", "apellido"=> "Martinez", "edad" => 24, "ciudad" => "Barcelona");

$counter = 1;
foreach ($datos as $valor) {
    echo "dato ". $counter . "º: " . $valor . "<br>";
    $counter++;
}
        ?>

    <h1>Ejercicio4 PauH:</h1>
<?php
    $datos = array( "nombre" => "Sara", "apellido"=> "Martinez", "edad" => 23, "ciudad" => "Barcelona");

$counter = 1;
foreach ($datos as $valor) {
    echo  var_dump($datos);
    break;
}
        ?>
        
        <h1>Ejercicio5 PauH:</h1>
<?php
    $letters = "a,b,c,d,e,f";   
    $result = explode(",", $letters);
   for ($i=5; $i >=0 ; $i--) { 
        echo "Letter" . ($i+1) . "º: " . $result[$i] . "<br>";
    }
    
        ?>
        <h1>Ejercicio6 PauH:</h1>
<?php
 $datos = array( "Marta" => "10 ",  "Isabel " => "8 ",  "Luis " => "7 ",  "Miguel " => "5 ",  "Aitor " => "4 ",  "Pepe" => "1",);

arsort($datos);
foreach($datos as $x=>$x_value)
   {
   echo  $x . "," . $x_value;
      }
    ?>

<h1>Ejercicio7 PauH:</h1>
<?php

$datos = array( "Marta" => "10", "Isabel" => "8", "Luis" => "7",);
echo "Media de las notas:"; 
echo array_sum($datos)/count($datos);
echo "<br>";
echo "Alumnos por encima de la media:";
foreach ($datos as $key => $value) {
    if ($value >= 5) {
        echo $key . ", ";
    }
}
?>


<h1>Ejercicio8 PauH:</h1>
<?php
$datos = array( "Marta" => "10", "Isabel" => "8", "Luis" => "7",);
echo "La nota mas alta es de:";
echo max($datos);
echo " y el mejor alumno es: ";
echo array_search(max($datos), $datos);     
echo "<br>";
echo "La nota mas baja es de:"; 
?>
</body>
</html>