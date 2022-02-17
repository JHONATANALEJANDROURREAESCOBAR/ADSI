<html>
<head>
<style>
</style>
<script>
</script>
</head>
<body oncopy="return false" onpaste="return false">
<center>
<form name="Validar" method="post">
<table border="1">

<tr>
<td colspan="2" align="center">
<label>Tabla de validaciones</label>
</td>
</tr>

<tr>
<td align="center">
<label> Validaciones </label>
</td>
<td align="center">
<label>Ejemplos</label>
</td>
</tr>

<tr>
<td>
<label> Solo letras </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloLetras(event);" required>
</td>
</tr>

<tr>
<td>
<label> Solo numeros </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloNumeros(event);" required>
</td>
</tr>

<tr>
<td>
<label> Solo letras minusculas </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloLetras(event);" onKeyUP="this.value=this.value.toLowerCase();" required>
</td>
</tr>

<tr>
<td>
<label> Solo letras mayusculas </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloLetras(event);" onKeyUP="this.value=this.value.toUpperCase();" required>
</td>
</tr>

<tr>
<td>
<label> Maximo 3 solo letras </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloLetras(event);" maxlength="3" required>
</td>
</tr>

<tr>
<td>
<label> Maximo 3 solo numeros </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloNumeros(event);" maxlength="3" required>
</td>
</tr>

<tr>
<td>
<label> Minimo 3 solo letras </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloLetras(event);" pattern=".{3,99}" required>
</td>
</tr>

<tr>
<td>
<label> Minimo 3 solo numeros </label>
</td>
<td align="center">
<input type="text" onkeypress="return SoloNumeros(event);" pattern=".{3,99}" required>
</td>
</tr>

<tr>
<td>
<label> Especial </label>
</td>
<td align="center">
<input type="text" onkeypress="return Especial(event);" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Validar">
</td>
</tr>

</table>
</form>
</center>
</body>
</html>
<style>

input[type=submit]
{
background-color: white;
border: none;
font-weight: bold;
padding: 6px 20px;
text-align: center;
font-size: 16px;
margin: 4px 4px;
box-shadow: 3px 3px 3px black;
position: center;
font-family: Arial;
width: 60%;
}

input[type=text]
{
font-family: Arial;
color:black;
background-color: white;
padding: 4px;
text-align: left;
font-size: 16px;
margin: 4px 4px;
box-shadow: 2px 2px 2px black;
}

table 
{
background-color: #F0EFEF;
padding:5px 5px;
}

label
{
font-family: Arial;
padding: 4px;
font-weight: bold;
color: black;
text-align: center;
align: center;
font-size: 18px;
}

td
{
padding: 6px 4px;
}

body
{

background-color: #F4E95C;
}

</style>
<script>

function SoloNumeros(evt)
{
if(window.event){
keynum = evt.keyCode;
}
else{
keynum = evt.which;
}

if((keynum > 47 && keynum < 58) || keynum == 8 || keynum== 13)
{
return true;
}
else
{
alert("Ingresar solo numeros");
return false;
}
}

function SoloLetras(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
letras = "ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnopqrstuvwxyzáéíóú";

especiales = [8,13];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letras.indexOf(tecla) == -1 && !tecla_especial)
{
 alert("Ingresar solo letras");
 return false;
}
}

function Especial(e)
{
key = e.keyCode || e.which;
tecla = String.fromCharCode(key).toString();
letraespecial = "$%!@.";

especiales = [8,13];
tecla_especial = false
for(var i in especiales) {
if(key == especiales[i]){
 tecla_especial = true;
 break;
}
}

if(letraespecial.indexOf(tecla) == -1 && !tecla_especial)
{
 alert("Ingresar solo letras especiales");
 return false;
}
}

</script>