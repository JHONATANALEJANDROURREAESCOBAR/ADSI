<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos del alumno</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div id="container">
        <header>
            <h1>promedio de notas</h1>
        </header>
        <section id="content">
            <aside>
                <h2>ingreso de datos</h2>
                <form action="ejercicio_03.php" method="post">
                    <p>
                        ingrese el nombre del alumno:
                        <input type="type" name="nombre">
                    </p><p>
                        ingrese la nota 1:
                        <input type="number" max="20" min="0" name="n1">
                    </p><p>
                        ingrese la nota 2:
                        <input type="nimber" max="20" min="0" name="n2">
                    </p><p>
                        ingrese la nota 3:
                        <input type="nimber" max="20" min="0" name="n3">
                    </p>
                    <input type="submit" value="promediar">
                </form>
            </aside>
        </section>
    </div>
</body>
</html>
        
