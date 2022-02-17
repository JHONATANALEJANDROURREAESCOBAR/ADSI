<?php

$horaNormal = $_REQUEST['horaNormal'];
$horaExtra = $_REQUEST['horaExtra'];

$pagoFinal = ($horaNormal * 3.75) + ($horaExtra * 5);

echo"SE PAGO <br> horas extras pagadas $ : " . $pagoFinal . "<br>";