<?php 
$CantString =  $_POST['cant'];
// Metodo para sacar la cadena de texto a partir de un número
function translate($n){
    if(!is_numeric($n)){
        return 'Valor no numerico';
    }
    $single_digit = ['', 'Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho', 'Nueve'];
    /*foreach ($single_digit as &$word) {
        $word = strtolower($word);
    }*/
    $double_digit = ['Diez', 'Once', 'Doce', 'Trece', 'Catorce', 'Quince', 'Dieciseis', 'Diecisiete', 'Dieciocho', 'Diecinueve'];
    $below_hundred = ['','','Veinti', 'Treinta', 'Cuarenta', 'Cincuenta', 'Sesenta', 'Setenta', 'Ochenta', 'Noventa'];

    if ($n < 0) {
        return false;
    }
    /* if ($n === 0) {
        return 'Cero';
    } */

    $word = '';

    if ($n < 10) {
        $word = $single_digit[intval($n)];
    } elseif ($n < 20) {
        $word = $double_digit[$n - 10] . ' ';
    } elseif($n==20){ //Veinte es un caso especial
        $word='Veinte';
    } elseif($n<30){
        $word=$below_hundred[2].$single_digit[$n-20];
    }elseif ($n < 100) {
        $rem = translate($n % 10);
        if($rem != ''){
            $word = $below_hundred[intval($n/10 )] . ' y ' . $rem;
        }else{
            $word = $below_hundred[intval($n/10 )] . '  ' . $rem;
        }
    } elseif ($n < 1000) {
        if($n == 100 ){
            $word ='Cien';
        }else{
            if($n < 200){
                $word = 'Ciento ' . translate($n % 100);
            } 
            elseif($n >= 500 && $n < 600){
                $word = 'Quinientos ' . translate($n % 100);
            }
            elseif ($n >= 700 && $n < 800){
                $word = 'Setecientos ' . translate($n % 100);
            }
            elseif ($n >= 900 && $n < 1000){
                $word = 'Novecientos ' . translate($n % 100);
            }
            else{
                $word = $single_digit[intval($n / 100)] . 'cientos ' . translate($n % 100);
            }
        }
    } elseif ($n < 1000000) {
        if($n >= 1000 && $n < 2000){
            $word = 'Mil ' . translate($n % 1000);
        }
        elseif($n >= 2000){
            $word = trim(translate(intval($n / 1000))) . ' Mil ' . translate($n % 1000);
        }
    } elseif ($n < 1000000000) {
        if($n >= 1000000 && $n < 2000000){
            $word = ' Un Millon ' . translate($n % 1000000);
        }else{
            $word = trim(translate(intval($n / 1000000))) . ' Millones ' . translate($n % 1000000);   
        }
    } else {
        if($n >=1000000000 && $n <2000000000){
            $word = ' Mil millones ' . translate($n % 1000000000);
        }else{
            $word = trim(translate(intval($n / 1000000000))) . ' Mil millones ' . translate($n % 1000000000);
        }
    }

    return $word;
}
if($CantString != ''){
    if(is_numeric($CantString)){
        $result = translate($CantString);

        $decimal = (intval($CantString) - $CantString);
        if(abs($decimal*100) == 0){
            //echo ucfirst($result);
        }else{
            //echo ucfirst($result) . ' con ' . round(abs($decimal * 100)) . '/100';
        }
    }  
}
?>