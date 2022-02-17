<html>
<head>
    <title></title>
</head>
<body>
<label for="numero1">Numero 1</label>
<input type="text" id="numero1" onchange="sumar();"><br>

<label for="numero2">Numero 2</label>
<input type="text" id="numero2" onchange="sumar();"><br>

<label for="resultado">Resultado</label>
<input type="text" id="resultado">

<script>
    
    function sumar(){
        var numero1 = document.getElementById('numero1').value;
        var numero2 = document.getElementById('numero2').value;

        if(numero1!=='' && numero2!==''){
            var suma = parseInt(numero1)+parseInt(numero2);
            document.getElementById('resultado').value = suma;
        }
    }
</script>
</body>
</html>