<?php
if(isset($_REQUEST["btn_enviar"]));
    $vrnumero = $_POST["nombres"];
    $vrimagen = $_POST["operacion"];

    if ($vrimagen=="1") {
        $archivoimg = "../img/uva.JPEG";
        //echo " la imajen es: "."<imag src='$archivoimg'>";
        $elemento = "1";
   
    }
     $i=1;
    do{
        echo "<img src='$archivoimg'>";
        $i++;
    }   while ($i <= $vrnumero);
    echo"<hr>";
         

?>



