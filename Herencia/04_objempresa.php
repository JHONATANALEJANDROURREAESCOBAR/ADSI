<?php
    require_once("01_claseCliente.php");
    require_once("04_claseusuario.php");
    require_once("03_clasecuentabancaria.php");

    $objcliente = new Cliente(30713456, "Ana Milena", 6400000);

    echo "Nombre del cliente: ". $objcliente->nombre. "<br>";
    echo "salario: ". $objcliente->getsalario() ."<br>";
    $objcliente->setsalario(2700000);
    echo "salario: " . $objcliente->getsalario() ."<br>";
    $objusuario = new usuario(10000,"Jhonatan Urrea", 1800000, "jhonatan@gmail.com", 123456);
    echo "<h2> CLASE USUARIO </H2>";
    echo "Nombre del Usuario: ". $objusuario->nombre ."<br>";
    echo "Salario: ". $objusuario->getsalario() ."<br>";
    echo "Email: " . $objusuario->getEmail();
    echo "<h2> CLASE DE CUENTA BANCARIA </H2>";
    $objCuenta = new Cuentabancaria(1001,"Tatiana",1200000,"tatiana@gmail.com",123,200,"Ahorros",1000000);
    echo "Nombre del Usuario: ". $objCuenta->nombre ."<br>";
    echo "Saldo: " .$objCuenta->getSaldo() ."<br>";
    echo $objCuenta->setvalor_retiro(250000);
    echo "Valor a retirar: " .$objCuenta->valor_retiro ."<br>";
    echo $objCuenta->retiro(250000);


?>      