<?php
// 1. Imprima por pantalla: “Hola mundo”.

echo "<p>Hola mundo</p>\n"; 

//2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.

$saludo = "Hola mundo";
echo "$saludo";

//3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.

$valor1 = 10;
$valor2 = 10;

echo "<p>Suma: $valor1 + $valor2 = " . $valor1 + $valor2 . "</p>\n";
echo "<p>Resta: $valor1 - $valor2 = " . $valor1 - $valor2 . "</p>\n";
echo "<p>Multiplicacion: $valor1 * $valor2 = " . $valor1 * $valor2 . "</p>\n";
echo "<p>Division: $valor1 / $valor2 = " . $valor1 / $valor2 . "</p>\n";
echo "<p>Resto: $valor1 % $valor2 = " . $valor1% $valor2 . "</p>\n";


//4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.

$celsius = 20;

echo "<p>1- Multiplicamos: $celsius * 1,8 = " . $celsius * 1.8 . ".</p>\n";
$totalmulti = $celsius * 1.8;
echo "<p>2- Sumamos: 32 + $totalmulti = " . 32 + $totalmulti . ".</p>\n";
$totalsuma = 32 + $totalmulti;
echo "<p>RESULTADO: $celsius ºC = $totalsuma ºF </p>\n";




/*5. Implementar algoritmos que permitan:
a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.*/


$base = 18;
$altura = 12;

echo "<p>a) Perimetro: 2 * $base + 2 * $altura = " . 2 * $base + 2 * $altura . ".</p>\n";
echo "<p>Area: $base * $altura = " . $base * $altura . ".</p>\n";

//b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.

$radio = 30;

echo "<p>b) Perimetro: 2 * 3.14 * $radio = " . 2 * 3.14 * $radio . ".</p>\n";
echo "<p>Area: 3.14 * $radio^2 = " . 3.14 * $radio ** 2 . ".</p>\n";









?>
