<?php 

$n1=intval($_GET['numero1']);
$n2=intval($_GET['numero2']);

if ($n1>$n2){
    echo "El primer número (".$n1.")son distintos que el segundo (".$n2.")";
}
elseif ($n1==$n2){
    echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer número (".$n1.") son distintos que el segundo (".$n2.")";
}
 ?>