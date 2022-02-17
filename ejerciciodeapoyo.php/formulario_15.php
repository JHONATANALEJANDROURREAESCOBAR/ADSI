<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio_15.php" method="POST">
        <label for="">Digite la cantidad de imagenes: </label><br>
        <input type="text" name="nombres"><br>
        <label for="">Seleccione la imagen: </label><br>
        <select name="operacion" >
            <option value="">--</option>
            <option value="1">uva</option>
            <option value="2">Manzana</option>
            <option value="3">Naranja</option>
        </select>

        <input type="submit" name="btn_enviar" value="Ejecutar">
    </form>
</body>

</html>