<?php


/**
 * Created by PhpStorm.
 * User: ADMINPVD
 * Date: 06/02/2017
 * Time: 9:02 PM
 */

$dias=800;
$horas= $dias * 24;
$minutos=$horas*60;
$segundos=$minutos*60;

$dias=$dias*86400;

$velocidad=299.792;
$distacia=($velocidad*$segundos);

echo "La distancia recorrida en".$dias."dis es de:".$distacia."Kilometros";
?>