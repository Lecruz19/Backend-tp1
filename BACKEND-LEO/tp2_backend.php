<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>
    <h1>Trabajo practico n2</h1>

<?php 

//1. Crear una variable n y validar que sea un número positivo.

$pepe = 5;
if ($pepe>0) {
    echo "<p>El numero $pepe es positivo</p>\n";
}

//2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.

$fatiga = 4;
if ($fatiga>1 & $fatiga<10) {
    echo "<p>El numero $fatiga es mayor a 1 y menor a 10</p>\n";
}

//3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.

$moni = 17;
if ($moni>10 || $moni<2){
  echo "<p>$moni es mayor a 10 o menor a 2</p>\n";
}

/*4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es 
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, 
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y 
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”*/

$numero1 = 6;
$numero2 = 6;

if ($numero1>$numero2){
    echo "<p>$numero1 + $numero2 =". $numero1+$numero2 ."</p>\n";
    echo "<p>$numero1 - $numero2 =". $numero1-$numero2 ."</p>\n";
}
elseif ($numero1<$numero2){
    echo "<p>$numero1 x $numero2 =". $numero1*$numero2 ."</p>\n";
    echo "<p>$numero1 / $numero2 =". $numero1/$numero2 ."</p>\n";
    echo "<p>$numero1 % $numero2 =". $numero1%$numero2 ."</p>\n";
}
else {
    echo "<p>Los números ingresados son iguales</p>";
}


?>

</body>
</html>