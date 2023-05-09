<!DOCTYPE html>
<html lang="en">
<head>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body id="bd">

<?php
$NombreLugar = $_POST["fname"];
$Descripcion = $_POST["lname"];
$Municipio = $_POST["munic"];
$URLinfo = $_POST["furl"];
$URLMaps = $_POST["furl1"];





if(!$NombreLugar) {
  header("Location: nofunctiona.php");
} else {
  echo "KINDER BUENO";
  echo '<script>alert("Todo esta bien.")</script>';
}

if(!$Descripcion) {
  header("Location: nofunctiona.php");
} else {
}

if(!$Municipio) {
  header("Location: nofunctiona.php");
} else {
}

if(!$URLinfo) {
  header("Location: nofunctiona.php");
} else {
}

if(!$URLMaps) {
  header("Location: nofunctiona.php");
} else {
}





?>


<h1 id="gh">Descubriendo Gran Canaria</h1>
<a href="./nuevolugar.html"><button class="nuevolug" >Nuevo lugar que visitar</button></a>
<a href="./lugares.php"><button class="lugares">Lugares que no me puedo perder</button></a>
<table style="width:100%">
    <tr>
      <th>Visitado</th>
      <th>Nombre del Lugar</th>
      <th>Descripcion</th>
      <th>Municipio</th>
      <th>URL con mas informacion</th>
      <th>URL de Google Maps</th>
      <th>Imagen</th>

    </tr>
    <tr>
      <td><?php 
      session_start();
      echo $_POST["fname"];
       ?></td>
      <td><?php 
      echo $_POST["fname"];
       ?></td>
      <td><?php 
      echo $_POST["lname"];
       ?></td>
      <td><?php 
      echo $_POST["munic"];
       ?></td>
      <td><?php 
      echo $_POST["furl"];
       ?></td>
      <td><?php 
      echo $_POST["furl1"];
       ?></td>
    </tr>
  
      
    </tr>
  </table>

  



<marquee behavior="scroll" direction="left" class="htext">Hola</marquee>   
    
</body>
</html>