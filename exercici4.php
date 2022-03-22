<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Ejercicio 4</title>
</head>
<body>
    <?php 
        $x=11;
        $y=7;
        $n=9.7;
        $m=7.5;

        $sumaInt= $x + $y;
        $restaInt= $x - $y;
        $productoInt=$x * $y;
        $modulInt= $x % $y;

        $sumaDou= $n + $m;
        $restaDou= $n - $m;
        $productoDou=$n * $m;
        $modulDou= $n % $m;

        $dobleX= $x* $x;
        $dobleY= $y* $y;
        $dobleN= $n* $n;
        $dobleM= $m* $m;

        $sumaTotal= $x + $y + $n + $m;
        $productoTotal= $x * $y * $n * $m;

        echo "<b> Para X y Y </b></br>";
        echo "El valor de X es: " . $x ."</br>";
        echo "El valor de Y es: " . $y ."</br>";
        echo "La suma entre X y Y es: ", $sumaInt. "</br>";
        echo "La resta entre X y Y es: ", $restaInt. "</br>";
        echo "El producto entre X y Y es: ", $productoInt. "</br>";
        echo "El módulo entre X y Y es: ", $modulInt. "</br>";

        echo "<b> Para N y M </b></br>";

        echo "El valor de N es: " . $n ."</br>";
        echo "El valor de M es: " . $m ."</br>";
        echo "La suma entre X y Y es: ",  $sumaDou. "</br>";
        echo "La resta entre X y Y es: ",  $restaDou. "</br>";
        echo "El producto entre X y Y es: ", $productoDou. "</br>";
        echo "El módulo entre X y Y es: ", $modulDou. "</br>";

        echo "<b> Para todas las variables </b></br>";
        echo "El doble de X es: ", $dobleX. "</br>";
        echo "El doble de Y es: ", $dobleY. "</br>";
        echo "El doble de N es: ", $dobleN. "</br>";
        echo "El doble de M es: ", $dobleM. "</br>";
        echo "La suma total de todas las variables es: " . $sumaTotal. "</br>";
        echo "El producto total de todas las variables es: " . $productoTotal. "</br>";

        
    ?>
</body>
</html>