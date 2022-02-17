<?php

class cliente{
    private $id;
    private $nombre;
    private $email;
    private $edad;
    private $clave;
    private $fecha_registro;
    private $estado;

    public function __construc($prmid,$prmnombre,$prmemail,$prmedad,$prmclave,$prmfecha_registro,$prmestado){
    
          
    $this->id = $prmid;
    $this->nombre = $prmnombre;
    $this->email = $prmemail;
    $this->edad = $prmedad;
    $this->clave = $prmclave;
    $this->fecha_registro = $prmfecha_registro;
    $this->estado = $prmestado;
    }
    
    private function generarClave(){
        $permitted_chars = '0123456789';
        $claveAux = substr(str_shuffle($permitted_chars),0 ,6);
        return $claveAux;
    }
    private function getfechaderegistro(){
        return date('d-m-Y H:r:s');
    }
    public function __get($name)
    {
        $value = "No se encuentra el atributo ".$name;
        if(property_exists('cliente',$name)){
            $this->$name = $value;
            $succes = "Actualizacion exitosa del atributo ".$name;
        }
        return $succes;
    }
    public function getcliente(){
      $arrayCliente = array(
          'nombre' => $this->nombre,
          'email' => $this ->email,
          'clave' => $this ->clave,
          'fecha' => $this ->fecha_registro
      );
      return $arrayCliente;
    }
    public function getemail(){
        return $this->email;
    }   
    
    public function setemail($email){
           $this->email = $email;
       }
    }

    $objcliente = new cliente('1','carlos','Carlos@gmail.com','35',true);
    $objcliente2 = new cliente('1','Jairo','Jairo@gmail.com','40',true);
    print_r('<prev>');
    print_r($objcliente->getcliente());
    print_r('</prev>');
    echo "<br>";
    print_r('<prev>');
    print_r($objcliente2->getcliente());
    print_r('</prev>');
    echo "<hr>";
    echo "Edad: ".$objcliente->edad;
    echo "<hr>";
    $objcliente2->setemail('Jairo@gmail.com');
    echo $objcliente2->getemail();




?>