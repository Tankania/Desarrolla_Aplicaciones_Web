<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Escribe tu nombre: <input type="text" name="nombre"/></p>
    <button id="verde" onmouseup="Boton()"> Saludar</button>
    <script>
       function Boton(){
            alert("Hola");
            document.getElementById("boton").style.color ="black";
        }
       
    </script>
</body>
</html>