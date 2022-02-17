<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>resultado</title>
</head>
<body>
    <h1>mostrar el resultado</h1>
       <?php
        $POST = (isset($_POST['base']) && !empty($_POST['base'])) && (isset($_POST['altura']) && !empty($_POST['altura']));
        if ($POST) {
            $base = htmlspecialchars($_POST['base']);
            //resultado
            $altura = htmlspecialchars($_POST['altura']);
            echo "el area del triangulo es";
                echo round(($_POST['base'] * $_POST['altura']) / 2, $precision = 2), "cm<sup>2</sup>";
            }else{
                echo "faltan datos confirmar por favor";
            }
       ?>
       <br>
       <br>
       <a href="formulario_05.php"> ««volver
</body>
</html>