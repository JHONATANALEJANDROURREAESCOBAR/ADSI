<html>
<head>
<style> type= "text/CSS">
[required]{
borde-color:red;
box-shadow:0px 0px 5px green;
}
</style>
</head>
<body>
<h1> <center> INGRESE TRES NUMEROS PARA LA TABLA DE MULTIPLICAR </center> </h1>
<form action ="ejercicio_20.php" method ="POST">
<table border=2>
<tr> <td bgcolor="purple"> Valor Inicial: </td>
<td bgcolor="purple"> <input type="text" name="Num1" required> </td>
</tr>
<tr> <td bgcolor="purple"> Valor Final: </td>
<td bgcolor="purple"> <input type="text" name="Num2" required> </td>
</tr>
<tr> <td bgcolor="purple"> Numero de Tabla: </td>
<td bgcolor="purple"> <input type="text" name="Num3" required> </td>
</tr>
<tr> <td bgcolor="purple"> <input type="submit" value="Generar"> </td>
</tr>
</table>
</form>
</body>
</html>