<?php 

     class Persona{

        private $cedula;
        public $nombre;
        protected $edad;

        //metodo constructor int solo indica recibir enteros
        //string cadenas de caracteres
        function  __construct ( int  $vrcedula , string  $vrnombre , $vredad )
        {
            $this->cedula = $vrcedula ;
            $this->nombre = $vrnombre ;
            $this->edad = $vredad ;
        }

          public function getCedula ( ){
            return  $this-> cedula ;
        }

         public function setCédula ( $vrcedula ){
            $this-> cedula = $vrcedula ;
        }



    } //fin de clase

?>