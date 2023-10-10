<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend</title>
</head>
<body>
    <?php
    //1. Mostrar los números del 1 al 100.
    print "<h2>Mostrar los números del 1 al 100.</h2>\n";

    for ($i=1; $i<=100; $i++) {
        print "<p>$i</p>\n";
    }

    //2. Mostrar los números del 100 al 1.
    print "<h2>Mostrar los números del 100 al 1.</h2>\n";

    for ($i=100; $i>0; $i--) {
        print "<p>$i</p>\n";
    }
    //3. Mostrar los números pares del 1 al 100.    //4. Mostrar los números impares del 1 al 100.  

    print "<h2> Mostrar los números pares del 1 al 100.| Mostrar los números impares del 1 al 100.</h2>\n";

    for ($i=1; $i<=100; $i++) {
        if ($i%2==0) {
        print "<p>Nummeros pares = $i</p>\n";
    } else {
         print "<p> Numeros inpares = $i</p>\n";
    }

    }

    //5. Mostrar la suma de los números de 1 a 20.
    print "<h2>Mostrar la suma de los números de 1 a 20.</h2>\n";
    $suma = 0;
    for ($i=1;$i<=20;$i++) {
        $suma += $i;
        print "<p>Suma = $suma </p>\n";
    }
    //6. Mostrar la suma de números pares de 1 a 20.
    print "Mostrar la suma de números pares de 1 a 20.";
    $sumapar = 0;
    for ($i=0;$i<=20;$i=$i+2) { 
        $sumapar += $i;
        print "<p>Suma numero pares = $sumapar </p>\n";
    
    }
    
    ?>
</body>
</html>
