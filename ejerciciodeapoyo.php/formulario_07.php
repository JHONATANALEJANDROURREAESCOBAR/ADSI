<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> num mayor </title>
</head>
<body>
<script>

n=parseInt(prompt("numero requeridos"));
w=0;
for (i=0; i<n; i++){
    u=parseInt(prompt("inserta los numeros"));
    if(u>w){
        w=u;
    }
}
alert("el numero mayor es: "+w);

</script>
</body>
</html>