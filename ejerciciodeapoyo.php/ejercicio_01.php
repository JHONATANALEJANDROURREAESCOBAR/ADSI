<?php
$pago = $_REQUEST['pago'];
$mensual = $pago * 0.60;
$hora = $pago * 0.02;
$pagoFinal = $pago + $hora + $mensual;

echo"SUELDO <br> Sueldo neto $" . $pago . "<br>";
echo"Pago mensual: $" . $mensual . "<br>";
echo"Pago de hora: $" . $hora . "<br>";
echo"Sueldo final: $" . $pagoFinal . "<br>";
?>