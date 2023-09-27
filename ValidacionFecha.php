<?php
$Fecha = $_POST['Fecha'];
$jsonObj =  New stdClass();

if($Fecha == ''){
        $jsonObj ->code = 41;
        $jsonObj ->msg = 'Formato de Fecha invalida!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
}
?>
