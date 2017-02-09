
<?php

$radio = $_POST["number1"];

$resultArea = area($radio);

function area($radio){

    $area = 3.12*($radio*$radio);

    return $area;
}

$resultlong = arealong($radio);

function arealong($radio)
{
    $long= $radio*2;
    return $long;
}

echo "el valor es del area es ".$resultArea;
echo "el valor de la longitud es ".$resultlong;

?>