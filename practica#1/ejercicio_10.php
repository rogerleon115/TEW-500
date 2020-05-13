
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio_10</title>
</head>
<body>
    <h1>practica 10</h1>
    <h2>escribeun programa que pinte por pantalla una piramide de esterisco la base de 9</h2>
    <p>
    <?php
    $base =9;
    for ($i=0; $i < $base ; $i++) { 
        for ($j=0; $j < $base - $i-1; $j++) 
        echo '';
        for ($j=0; $j <=$i ; $j++) echo '*';
        echo'</br>';
    }
    ?>
    </p>
    <pre>
    <?php
    echo "    *    <br>";
    ?>
    <?php
    echo "   ***   <br>";
    ?>
    <?php
    echo "  *****  <br>";
    ?>
    <?php
    echo " ******* <br>";
    ?>
    <?php
    echo "********* <br>";
    ?>
   
    </pre>
</body>
</html>