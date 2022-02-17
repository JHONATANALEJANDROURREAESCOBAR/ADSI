<?php
    require_once("01_clasecliente.php");

    class Usuario extends cliente {

        private $email;
        private $password;

        //asignar los atributos
        public function __construc($vrcedula, $vrnombre, $vrsalariol, $vremail, $vrpassword){
      
            //parent permite llevar los datos a la clase cliente
            parent::__construct($vrcedula, $vrnombre, $vrsalariol);
            $this->email = $vremail;
            $this->password = $vrpassword;
        }


        public function getEmail(){
            return $this->email;
        }

        public function setEmail($vremail){
            $this->email = $vremail;
        }
    }//end clase


?>