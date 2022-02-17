<?php 
    class cliente{
   private    $cedula;
   public     $nombre;
   protected  $salario;



   public function __construct($vrcedula, $vrnombre, $vrsalario)
    {
        $this->cedula = $vrcedula;
        $this->nombre = $vrnombre;
        $this->salario = $vrsalario;
    }
    //ver los valores del atributo
    public function getcedula(){
        return $this->cedula;
    }
    //cambiar los valores del atreibuto
    public function setsalario($vrsalario){
        $this->salario = $vrsalario;
    }
    public function getsalario(){
    return $this->salario;
    }

}//end clase


?>