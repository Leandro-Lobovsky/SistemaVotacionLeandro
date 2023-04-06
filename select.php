<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="region">

    <label>
        <select name="">

        <?php 
        include('modelo/conexion.php');

        $consulta="SELECT * FROM region";
        $ejecutar= mysqli_query($conexion ,$consulta) or die(mysqli_error($conexion));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>

            <option value="<?php echo $opciones['nombreregion']?>"> <?php echo $opciones['nombreregion'] ?>"></option>

        <?php endforeach?>

        </select>

    </label>
    </div>
    


</body>
</html>