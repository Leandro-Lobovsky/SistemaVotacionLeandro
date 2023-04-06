<?php

$Servidor = "localhost";
$Usuario = "root";
$Password = "";
$NombreBD = "db_votacion";

$conexion = new mysqli($Servidor, $Usuario, $Password, $NombreBD);

if(!$conexion){
    echo"Error en la conexion con el servidor";
}

?>