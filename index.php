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
if(!isset($_COOKIE["contador"])){
    //creo y modifico y elimino la cookie
    $cookie=0;
    setcookie("contador", $cookie, time()+ 60*60*24*365, "/", "localhost" ); "i" ; 
    }else{
    //leer el valor de una cookie
    $cookie=$_COOKIE['contador']=1;
    setcookie("contador", $cookie, time()+ 60*60*24*365, "/", "localhost" ); "i" ;   

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet"  type="text/css" href="css/style.css">
  	<link rel=”shortcut icon” type=”image/png” href=”img/favicon.png”/>
   	<link rel="stylesheet"  type="text/css" href="css/alertify.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Hola Mundo </h1>
        <p> Esto es una prueba de commit en git</p>
    
        Contador: <div class="badge badge-info"> <?= $cookie  ; ?></div>
    
         <a href="www.google.com">Lo ke sea pa comitear s</a>
    <h4>esto es la prueba de que comiteamos en local ss i se va para la nube.XD</h4> 
        <?php 
        echo "hola mundo"
         ; ?>

</div>
    <script src="js/jquery-3.4.1.min.js"></script>
	 <script src="js/popper.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
  	 <script src="js/alertify.min.js"></script>
   	 <script src="alertify/alertify.min.js"></script>
   	 <script src="moment/moment-with-locales.js"></script>
	 <script>
	 	$( document ).ready(function() {
 	 	console.log("Are /you READY!!");
      
   		 });
 
	</script>
  <script src="https://kit.fontawesome.com/a03bedb3c1.js"></script>
</body>
</body>
</html>