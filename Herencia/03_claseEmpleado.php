<?php
     require_once("03_claseEmpleado.php");

     class Empleado extends Cliente{

        private $puesto;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito, $vrpuesto)
        {  //paret::__llevo los datos al constructor de la clase persona
            parent::__construct($vrcedula, $vrnombre, $vredad, $vrcredito);
            $this->puesto = $vrpuesto;

        }


    }//end clase

?>