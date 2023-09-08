<?php 
    $NCheque = $_POST['NCheque'];
    $Nombre = $_POST["Nombre"];
    $Cant = $_POST["Cant"];
    $DGasto = $_POST["DGasto"];

    var_dump($_POST);

    If($NCheque == '' || $Nombre == '' || $Cant == '' || $DGasto == ''){
        echo("Porfavor ingrese los datos en todos lo campos");
    };
?>