<?php 
    //setcookie sirve para crear la cookie 
    //son ficheros que se guardan que tienen una caducidad
    //programas la caducidad de las cookies.
    //lo que pasa las cookies los ultimos anio es que guarda demasiada informacion..
    // se establece una sesion y necesita de una cookie para poder funcionar 
    //hasta que punto puede guardar informacion.
    //siempre poner un valor ( time() ) no si no muere la cookie.
    // "/" definimos para todo el sitio o podes pasar un path /carpeta/index.php
    //https si va por un protocolo seguro. true - false 
    //https si va por un protocolo normal. true - false 

    setcookie("contador", 0, time()+ 60*60*24*365, "/" ,false , true ); "i" ; 
    //leer el valor de una cookie

    //$cookie=$_COOKIE['contador'];   


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo </h1>
    <p> Esto es una prueba de commit en git</p>

    <a href="www.google.com">Lo ke sea pa comitear s</a>
    <h4>esto es la prueba de que comiteamos en local si se va para la nube.XD</h4> 
    <?php echo "hola mundo" ; ?>
</body>
</html>