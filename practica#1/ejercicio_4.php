<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio_4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h2>Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.</h2>

<table border="1">

    <tr>
        <th>Per.</th>
        <th>Hrs.</th>
        <th>LUNES</th>
        <th>MARTES</th>
        <th>MIERCOLES</th>
        <th>JUEVES</th>
        <th>VIERNES</th>
    </tr>
    <tr>
        <td>1</td>
        <td>08:00 - 08:45</td>
        <td rowspan="4"><?php echo $tew-500;?></td>
        <td rowspan="4"><?php echo $tew-500;?></td>
        <td rowspan="2"><?php echo $tew-500;?></td>
        <td rowspan="4"><?php echo $tew-500;?></td>
        <td rowspan="2"><?php echo $tew-500;?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>08:45 - 09:30</td>

    </tr>
    <tr>
        <td>3</td>
        <td>09:30 - 10:15</td>
      
        <td rowspan="2"><?php echo $tew-500;?></td>
    
        <td rowspan="2"><?php echo $tew-500;?></td>
    </tr>
    <tr>
        <td>4</td>
        <td>10:15 - 11:00</td>
   
    </tr>
    <tr>
        <td colspan="7">DESCANSO</td>
    </tr>
    <tr>
        <td>5</td>
        <td>11:30 - 12:15</td>
        <td rowspan = "2"><?php echo $tew-500;?></td>
        <td rowspan = "2"><?php echo $tew-500;?></td>
        <td rowspan = "2"><?php echo $tew-500;?></td>
        <td rowspan = "2"><?php echo $tew-500;?></td>
        <td rowspan="2"><?php echo $tew-500;?></td>
    </tr>
    <tr>
        <td>6</td>
        <td>12:15 - 13:00</td>
      
    </tr>

</table>

</body>
</html> 