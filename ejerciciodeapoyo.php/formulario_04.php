<!DOCTYPE html>
    <html>
        <head><meta charset="UTF-8"></head>
        <title> Cálculo de intereses</title>
        <body>
            <center><h3>Introduce el capital, el porcentaje de interés  y el tiempo en alos</h3></center>
            <form name="Formulario" method="post" action="ejercicio_04.php">
            <table>
                <tr>
                    <td>
                        Capital incial:
                    </td>
                </tr>
                <tr>
                    <td><input type="float" name="capital" value="Cantidad X" required></td>
                 <tr>
                    <td>
                        Tiempo (años):
                    </td>
                </tr>
                <tr>
                    <td><input type="number" name="tiempo" value="1" max="100" required></td>
                 </tr>
                 <tr>
                    <td>Porcentaje:</td>
                 </tr>
                 <tr>
                    <td><input type="number" name="porcen" value="5" max="100" required></td>
                 </tr>
                 <tr>
                <tr>
                    <td><input type="submit" name="Enviar">
                        <input type="reset" name="Reestablecer">
                    </td>
                    </tr>
                </tr>
            </table>
            </form>
        </body>
</html>