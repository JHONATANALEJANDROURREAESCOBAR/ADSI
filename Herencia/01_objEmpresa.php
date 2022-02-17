<?php 
    //requiere llama al nombre del archivo para ser cargado en memoria RAM
    require_once ( "01_clasePersona.php" );
    require_once ( "02_claseCliente.php" );
    require_once ( "03_claseEmpleado.php" );

    $vrobjPersona = new  Persona( 100201100 , "Juan Perez" , 21 );
    echo  "Cédula: " . $vrobjPersona -> getCedula (). "<br>" ;
    $vrobjPersona ->getCedula ( 20001001 );
    echo  "Cambio de cédula: " . $vrobjPersona -> getCedula (). "<br>" ;

    echo  "<h2>DATOS DE LA CLASE CLIENTE</h2>" ;
    $vrobjCliente = new  Cliente ( 30713456 , "Ana Maria Reyes" , "anareyes@hotmail.com" , 28 );
    echo  "Cédula cliente: " . $vrobjCliente->getCedula(). "<br>" ;
    $vrobjCliente2 = new  Cliente ( 27304560 , "Juan Diego Peláez" , "juandiego@hotmail.com" , 32 );
    echo  "Cédula cliente: " . $vrobjCliente2->getCedula(). "<br>" ;
    echo  "Edad cliente: " . $vrobjCliente2-> nombre . "<br>" ;

    echo  "<h2>DATOS DE LA CLASE EMPLEADO</h2>" ;
    $vrobjEmpleado = new  Empleado( 50010234 , "Jimena Cortez", 35, 33500000, "Contador");
    echo "Nombre del Empleado: ". $vrobjEmpleado->nombre."<br>";
    echo "Cedula: " . $vrobjEmpleado->getCedula();



?>