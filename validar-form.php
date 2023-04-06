<?php 
  if(isset($_POST['register'])){
    //Si es que el nombre esta vacio
    if(empty($nombre)){
        echo "<p class='error'>* Error, debes agregar tu nombre!</p>";
    }
    //Si el alias es menor a 5
    if(strlen($alias) < 5){
        echo "<p class='error'>* Error, tu alias debe ser mayor a 5 caracteres</p>";
    }
    //Si alias solo contiene letras o solo contiene numeros
    if(preg_match("/^[a-zA-Z0-9]+$/", $alias)) {
            echo "<p class='error'>* Error, tu alias debe contener letras y numeros!!</p>";
    }
    if(empty($rut)){
        echo "<p class='error'>* Error, debes agregar tu rut!</p>";
    }
    if(empty($email)){
        echo "<p class='error'>* Error, debes agregar tu email!</p>";
    } else{
        // Validar el email con filtro de PHP
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>* El email es incorrecto!!</p>";
        }
    }
    if(empty($region)){
        echo "<p class='error'>* Error, debes agregar tu region!</p>";
    }
    if(empty($comuna)){
        echo "<p class='error'>* Error, debes agregar tu comuna!</p>";
    }
    if(empty($checkbox)){
        echo "<p class='error'>* Error, debes agregar opciones de Como se entero de nosotros!</p>";
    } else{
        // Si hay menos de 2 opciones marcadas
        if(count(array($checkbox)) <= 2){
        echo "<p class='error'>* Al menos selecciona 2 opciones!</p>";
    }
    }

  }

  /**
 * Validar rut
 *
 * @param $rut string
 * @return true o false
 */

function valida_rut($rut)
{
    $rut = preg_replace('/[^k0-9]/i', '', $rut);
    $dv  = substr($rut, -1);
    $numero = substr($rut, 0, strlen($rut)-1);
    $i = 2;
    $suma = 0;
    foreach(array_reverse(str_split($numero)) as $v)
    {
        if($i==8)
            $i = 2;

        $suma += $v * $i;
        ++$i;
    }

    $dvr = 11 - ($suma % 11);
    
    if($dvr == 11)
        $dvr = 0;
    if($dvr == 10)
        $dvr = 'K';

    if($dvr == strtoupper($dv))
        return true;
    else
        return false;
}

?>