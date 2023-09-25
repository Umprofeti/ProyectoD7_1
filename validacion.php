<?php 
    $NCheque = $_POST['NCheque'];
    $Nombre = $_POST["Nombre"];
    $Cant = $_POST["Cant"];
    $DGasto = $_POST["DGasto"];
    $Fecha = $_POST["Fecha"];

    $Error = [
        1 => 'Porfavor ingrese todos los datos en los campos correspondientes!',
        2 => 'Formato de Fecha invalida!!'
    ];
    /*var_dump($_POST);*/

    If($NCheque == '' || $Nombre == '' || $Cant == '' || $DGasto == ''){
        echo('<i class="fas fa-exclamation-circle "></i> ' . $Error[1]);
    }elseif($Fecha == ''){
        echo('<i class="fas fa-exclamation-circle "></i> ' . $Error[2]);
    }else{
        echo('<i class="fas fa-check-circle "></i> Datos enviados Correctamente');
    }
?>