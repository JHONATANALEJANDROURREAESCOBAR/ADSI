<?php
require_once("01_ejercicio.php");

$objVehiculo = new Vehiculo("ZHZ-354","Mazda",2020,455200,70,30);
$objVehiculo->getVehiculo();

print_r('<pre>');
print_r($objVehiculo);
print_r('</pre>');

echo"<br>";
echo $objVehiculo->getmarca();
echo"<br>";
$objVehiculo->setmarca("Ford");
echo $objVehiculo->getmarca();
echo"<br>";
echo $objVehiculo->modelo;
echo"<br>";
echo"La distancia recorrida es: " . $objVehiculo->calculo_distancia();
echo"<br>";
echo $objVehiculo->getPlaca();
echo"<br>";
$objVehiculo->setPlaca("ZHZ-354");
echo "La placa actualizada es: " . $objVehiculo->getPlaca();
echo"<br>";








?>