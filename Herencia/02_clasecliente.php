<?php 
    require_once("01_clasePersona.php");

    class Cliente extends Persona {
        
        protected $credito;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito)
        {   //parent permite llevar los datos al construtor de Persona
            parent::__construct($vrcedula, $vrnombre, $vredad);    
            $this->credito = $vrcredito;
        }

        public function getCredito(){
            return $this->credito;
        }




    }//end clase

?>