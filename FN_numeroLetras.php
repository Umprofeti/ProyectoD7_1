<?php 
$CantString =  $_POST['cant'];
// Metodo para sacar la cadena de texto a partir de un número
function translate($n){
    $single_digit = ['', 'Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho', 'Nueve'];
    $double_digit = ['Diez', 'Once', 'Doce', 'Trece', 'Catorce', 'Quince', 'Diez y seis', 'Diez y siete', 'Diez y ocho', 'Diez y nueve'];
    $below_hundred = ['Veinte', 'Treinta', 'Cuarenta', 'Cincuenta', 'Sesenta', 'Setenta', 'Ochenta', 'Noventa'];

    if ($n < 0) {
        return false;
    }
    /* if ($n === 0) {
        return 'Cero';
    } */

    $word = '';

    if ($n < 10) {
        $word = $single_digit[$n];
    } elseif ($n < 20) {
        $word = $double_digit[$n - 10] . ' ';
    } elseif ($n < 100) {
        $rem = translate($n % 10);
        $word = $below_hundred[($n - $n % 10) / 10 - 2] . ' ' . $rem;
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
            else{
                $word = $single_digit[intval($n / 100)] . ' Cientos ' . translate($n % 100);
            }
        }
    } elseif ($n < 1000000) {
        $word = trim(translate(intval($n / 1000))) . ' Mil' . translate($n % 1000);
    } elseif ($n < 1000000000) {
        $word = trim(translate(intval($n / 1000000))) . ' Millones ' . translate($n % 1000000);
    } else {
        $word = trim(translate(intval($n / 1000000000))) . ' Mil millones ' . translate($n % 1000000000);
    }

    return $word;
}
$result = translate($CantString);
if(is_float($CantString)){
    $decimal = (intval($CantString) - $CantString); 
}
echo $result;
?>