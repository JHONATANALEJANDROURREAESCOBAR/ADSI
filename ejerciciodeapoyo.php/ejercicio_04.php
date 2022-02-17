<?php 

$nom = $_POST['nombre'];

$tiempo = $_POST['tiempo'];
$porcen = $_POST['porcen'];
$capital = $_POST['capital'];
$n = 1;  

function interest($capital,$tiempo,$porcen,$n){
    $acumulado=0;
    if ($tiempo > 1){
            $acumulado=interest($capital,$tiempo-1,$porcen,$n);
   }
    $acumulado+= $capital;
    $acumulado = $acumulado * pow(1 + $porcen/(100 * $n),$n);
    return $acumulado;
 }
 echo "el interes acumulado es".interest($capital,$tiempo,$porcen,$n);
 ?>