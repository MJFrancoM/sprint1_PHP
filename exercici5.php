<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Ejercicio 5</title>
</head>
<body>
    <?php 
       
        $miPrimerArray= array(2,7,9,11,3);
        $miSegundoArray= array(19,25,34);

        $miSegundoArray[] = 43;

        $fusion = array_merge($miPrimerArray, $miSegundoArray);



        echo "La longitud del array resultante es: " . count($fusion);
        echo "</br>";

        echo "Los elementos que contiene el array resultante son: </br>";

        foreach($fusion as $elemento){
            echo $elemento . "</br>";
        }
    ?>
</body>
</html>