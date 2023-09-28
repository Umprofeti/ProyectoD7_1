<?php 
    $NCheque = $_POST['NCheque'];
    $Nombre = $_POST["Nombre"];
    $Cant = $_POST["Cant"];
    $DGasto = $_POST["DGasto"];
    $Fecha = $_POST["Fecha"];

    $Error = [
        2 => 'Formato de Fecha invalida!!'
    ];
    /*var_dump($_POST);*/
    $jsonObj =  New stdClass();
    If($NCheque == '' || $Nombre == '' || $Cant == '' || $DGasto == ''){
        
        $jsonObj ->code = 40;
        $jsonObj ->msg = 'Por favor ingrese todos los datos en los campos correspondientes!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
    }elseif ($Fecha == '') {
        $jsonObj ->code = 41;
        $jsonObj ->msg = 'Formato de Fecha invalida!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
    }else{
        $jsonObj ->code = 200;
        $jsonObj ->msg = 'Datos enviados Correctamente!';
        $jsonObj = json_encode($jsonObj);
        echo($jsonObj);
    }
?>