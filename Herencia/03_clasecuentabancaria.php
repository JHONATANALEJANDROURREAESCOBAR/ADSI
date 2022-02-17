<?php
    require_once("04_claseusuario.php");

     class Cuentabancaria extends Usuario{

    private $codigo;
    protected $tipo_cuenta;
    private $saldo;
    public $valor_retiro;

    //constructor
    public function __construct($vrcedula, $vrnombre, $vrsalario, $vremail, $vrpassword, $vrcodigo, $vrtipo_cuenta, float $vrsaldo ){
        parent::__construct($vrcedula, $vrnombre, $vrsaldo, $vremail, $vrpassword);
        $this->codigo = $vrcodigo;
        $this->tipo_cuenta = $vrtipo_cuenta;
        $this->salario = $vrsaldo;
    }

    public function getsaldo(){
        return $this->saldo;
    }
    public function setsaldo($vrsaldo){
        $this->saldo = $vrsaldo;
    }
    public function setvalor_retiro($vrvalor_retiro){
        $this->valor_retiro = $vrvalor_retiro;
    }
    //metodo para hacer un retiro

    public function Retiro($vrvalor_retiro){
         if ($this->saldo > $vrvalor_retiro){
             $this->saldo = $this->saldo - $vrvalor_retiro;
        }
         return $this->saldo;
    }

}//end clase
?>