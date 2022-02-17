<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Costo de una llamada en minutos</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $duracion_en_minutos = floatval ($_POST['duracion_en_minutos']);
    $costo=50*$duracion_en_minutos;
    if($duracion_en_minutos>5)
        $costo=$costo+($duracion_en_minutos-5)+1.2;
    echo 'Valor de costo: ' . $costo . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="duracion_en_minutos">Ingresa el valor de duracion en minutos:</label>
                        </td>
                        <td>
                            <input name="duracion_en_minutos" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>