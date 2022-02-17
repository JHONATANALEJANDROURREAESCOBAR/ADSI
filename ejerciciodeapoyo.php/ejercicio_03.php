<?php

   $nom = $_POST['nombre']; $no1 = $_POST['n1']; $no2 = $_POST['n2']; $no3 = $_POST['n3'];
   $resultado = round(($no1 + $no2 + $no3) / 3);
   echo "la nota del alumno $nom es $resultado <br>";
  class clasesuma {
    public $prom=0;
    public function M_suma($prom,$resultado) {
        $prom = $resultado;
        if($prom>=0 && $prom<=15){
            echo "por lo tanto el alumno no pasa el año.";
        } elseif($prom>=16 && $prom<=17){
            echo "por lo tanto el alumno tiene 1/4 del año ganado.";
        } elseif($prom>=10 && $prom<=19){
            echo "por lo tanto el alumno tiene 1/2 del año ganado";
        } elseif($prom==20) {
            echo "por lo tanto el alimno tiene el año ganado";
        } else {
            echo "por favor introdice bien los datos.";
        }
    }      
  }  $obj = new clasesuma();
  echo $obj->M_suma($no1, $no2, $no3);
?>
