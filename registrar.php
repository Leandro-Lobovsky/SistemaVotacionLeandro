<?php

//Se incluye el config que sirve para conectarse a la DB
include('modelo/conexion.php');

// Al apretar el boton Votar
if (isset($_POST['register'])) {

    //Los datos que se deben enviar
    $nombre = $_POST['nombre'];
    $alias = $_POST['alias'];
    $rut = $_POST['rut'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $comuna = $_POST['comuna'];
    $candidato = $_POST['candidato'];
    $checkbox = $_POST['checkbox'];

    $consulta = "INSERT INTO usuarios VALUES ('','$nombre','$alias','$rut','$email','$region','$comuna','$candidato','$checkbox')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        ?>
        <h3 class="ok">Has votado correctamente</h3>
        <?php
    } else {
        ?>
        <h3 class="bad">Ha ocurrido un error!</h3>
        <?php
    }

}

?>