<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$NombreLugar = $_POST["fname"];
$Descripcion = $_POST["lname"];
$Municipio = $_POST["munic"];
$URLinfo = $_POST["furl"];
$URLmaps = $_POST["furl1"];


if($NombreLugar = "") {
    echo "<br>No te ha indroducido nada.";
}




?>    
</body>
</html>
