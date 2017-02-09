
<html>

<body>
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
<form action="ejercicio3.php" method="post">
    <nav>
        <div>
            <p> digite el radio: <input type="number" name="number1"  id="number1" required > </p>
            <button type="submit" class="menu" > circulo</button>
            <button type="submit" >longitud</button>
        </div>
    </nav>
</form>

</body>

</html>
