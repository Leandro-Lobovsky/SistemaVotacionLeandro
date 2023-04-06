<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema Votacion Leandro Lobovsky</title>
    <!-- Estilo a utilzar -->
    <link href="estilo/estilo.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Formulario metodo post para enviar los datos -->
    <form method="post">
        <h1>FORMULARIO DE VOTACI&OacuteN</h1>

        <label>Nombre y Apellido</label>
        <input type="text" name="nombre">
        <br>

        <label>Alias</label>
        <input type="text" name="alias">
        <br>

        <label>RUT</label>
        <input type="text" name="rut">
        <br>

        <label>Email</label>
        <input type="email" name="email">
        <br>

        <!-- Select de Region, el cual llama a los datos que estan en la base de datos -->

        <div id="region">
        <label> Region
        <select name="region">

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




        <!-- Select de Comuna, el cual llama a los datos que estan en la base de datos -->

        <div id="comuna">
        <label> Comuna
        <select name="comuna">

        <?php 
        include('modelo/conexion.php');

        $consulta="SELECT * FROM comuna";
        $ejecutar= mysqli_query($conexion ,$consulta) or die(mysqli_error($conexion));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>

            <option value="<?php echo $opciones['nombrecomuna']?>"> <?php echo $opciones['nombrecomuna'] ?>"></option>

        <?php endforeach?>

        </select>

        </label>
        </div>
        

        <!-- Select de Candidato, el cual llama a los datos que estan en la base de datos -->

        <div id="comuna">
        <label> Candidato
        <select name="candidato">

        <?php 
        include('modelo/conexion.php');

        $consulta="SELECT * FROM candidato";
        $ejecutar= mysqli_query($conexion ,$consulta) or die(mysqli_error($conexion));

        ?>

        <?php foreach ($ejecutar as $opciones): ?>

            <option value="<?php echo $opciones['nombrecandidato']?>"> <?php echo $opciones['nombrecandidato'] ?>"></option>

        <?php endforeach?>

        </select>

        </label>
        </div>

 
        <!-- Checkbox en el cual se puede seleccionar mas de una opcion -->
       
        <label>Como se enter&oacute de Nosotros</label><br>
        <input type="checkbox" name="checkbox" value="Web">Web
        <input type="checkbox" name="checkbox" value="TV">TV
        <input type="checkbox" name="checkbox" value="Redes Sociales">Redes Sociales
        <input type="checkbox" name="checkbox" value="Amigo">Amigo
        <br>

 
        <!-- Boton que termina de hacer el registro del usuario -->
        <input type="submit" name="register" value="VOTAR">
        <br>
        
        <!-- Se incluye registrar.php para lograr registrar en la base de datos, ademas de mostrar mensajes -->
        <?php
         include("registrar.php")
        ?>
        <!-- En este apartado estan las validaciones de cada campo -->
        <?php
         include("validar-form.php")
        ?>

    

    </form>

</body>

</html>