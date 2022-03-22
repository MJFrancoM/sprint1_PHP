<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Ejercicio 2</title>
</head>
<body>
    <?php
        $saludo="Hello World!";
        $presentacion="Este es el curso de PHP";
        echo $saludo."<br/>";
        echo strtoupper($saludo)."<br/>";
        echo "La longitud de la variable es: " . strlen($saludo)."<br/>";
        echo strrev($saludo)."<br/>";
        echo $saludo. " " . $presentacion;
    
    ?>
</body>
</html>