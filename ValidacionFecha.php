<?php
$Fecha = $_POST['Fecha'];
$jsonObj =  New stdClass();

if($Fecha == ''){
    echo('<i class="fas fa-exclamation-circle "></i> ');
        $jsonObj ->code = 41;
        $jsonObj ->msg = 'Formato de Fecha invalida!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
}
?>
