<?php

echo '<form action="formulario_08.php" method="get">';
echo 'Numero uno:<input name="uno" type="text" /><br>';
echo 'Numero dos:<input name="dos" type="text" /><br>';
echo '<input name="" type="submit" />';
echo '</form>';
$num1 = $_GET['uno']; //dividendo
$num2 = $_GET['dos']; //divisor
$num3 = $num1/$num2 ; //cosiente
$num4 = $num3*$num2 ; //multiplicacion entre el divisor y el cosiente

if($num1 % $num2 == 0){
    echo "Es divisible de 20";
}else{
    echo "No es divisible";
}
?>