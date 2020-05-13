<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio_5</title>
</head>
<body>
<h1>practica 5</h1>
<h2>escribe un programa que muetre por pantalla la operacion aritmetica <br> suma, resta, multiplicacion y divicion </h2>
<?php 
    $x = 144;
    $y = 999;

    $suma =$x + $y;
    $resta =$x - $y;
    $multiplicacion =$x * $y;
    $divicion =$x / $y;
    ?>
    <p>
    <?php 
    echo " la suma es : ". $suma ;
    ?>
    </p>
    <p>
    <?php 
    echo " la resta es : ". $resta ;
    ?>
    </p>
    <p>
    <?php 
    echo " la multiplicacion es : ". $multiplicacion ;
    ?>
    </p>
    <p>
    <?php 
    echo " la la divicion es : ". $divicion ;
    ?>
    </p>
    
</body>
</html>