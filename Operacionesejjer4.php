<?php
if (!empty($_POST["numero"])) {
    $numero = "";
    $numero = $_POST["numero"];
    $numeros=(string)$numero;
    $result="";
    for ($i = strlen($numero); $i >=0; $i--) {
        $result.= $numeros [$i];
    }
    echo" El valor al reves es : $result";

?>

}