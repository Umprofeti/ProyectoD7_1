<?php
$Fecha = $_POST['Fecha'];
$jsonObj =  New stdClass();

if($Fecha == ''){
        $jsonObj ->code = 41;
        $jsonObj ->msg = '<span class="error-msg"><i class="fas fa-exclamation-circle"></i>Formato de Fecha invalida!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
}
?>
