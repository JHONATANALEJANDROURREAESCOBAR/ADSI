<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<center>
<h1>Tabla de multiplicar</h1>

<form action="formulario_13.php" method="GET">
<input type="number" min="1" name="cajanumero" required>
<input type="submit" value="Crear tabla">
</form>

<?php

if(isset($_GET['cajanumero']))
{
    $numeroingresado = $_GET['cajanumero'];
    echo "<table border='1'><br>";
    echo "<h3>Tabla del $numeroingresado </h3>";
    
    for($i=1; $i <= 12; $i++)
    {
        $valor = $i*$numeroingresado;
        echo "<tr>";
        echo "<td>&nbsp; $i X $numeroingresado &nbsp;</td>";
        echo "<td>&nbsp; $valor &nbsp;</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
}	

?>

</center>
</body>
</html>