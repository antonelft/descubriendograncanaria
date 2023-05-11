<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="stylo.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No functiona</title>
</head>
<body>
 <?php
 session_start();
 $NombreLugar = $_SESSION["fname"];
 $Descripcion = $_SESSION["lname"];
 $Municipio = $_SESSION["munic"];
 $URLinfo = $_SESSION["furl"];
 $URLMaps = $_SESSION["furl1"];
 //$Imagen = $_SESSION["imagen"];

if(!$NombreLugar) {
    echo '<script>alert("Escribe un nombre de lugar.")</script>';
}

if(!$Descripcion) {
    echo '<script>alert("Escribe una descripcion para la lugar.")</script>';
}


if(!$Municipio) {
    echo '<script>alert("Escribe un nombre del municipio.")</script>';
}


if(!$URLinfo) {
    echo '<script>alert("Escribe la enlace de mas informacion.")</script>';
}

if(!$URLMaps) {
    echo '<script>alert("Escribe la enlace del google maps.")</script>';
}

/*if(!$Imagen) {
    echo '<script>alert("No imagen.")</script>';
  } else {

  }*/




$pattern = '/^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/';


if (!preg_match($pattern, $URLinfo)) {
    echo '<script>alert("Enlace de mas informacion estan invalido.")</script>'; 
} 

if (!preg_match($pattern, $URLMaps)) {
    echo '<script>alert("Enlace de google maps estan invalido.")</script>'; 
} 



if((strlen($NombreLugar) > 30)) {
    echo '<script>alert("Nombre del Lugar es mas que 30 caracteres.")</script>';
  }
  
  if((strlen($Descripcion) > 100)) {
    echo '<script>alert("Descripcion es mas que 100 caracteres.")</script>';
  }
  
  if((strlen($Municipio) > 30)) {
    echo '<script>alert("Municipio es mas que 30 caracteres.")</script>';
  }

  
 

 ?>



</body>
</html>