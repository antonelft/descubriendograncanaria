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
session_start();
$NombreLugar = $_POST["fname"];
$Descripcion = $_POST["lname"];
$Municipio = $_POST["munic"];
$URLinfo = $_POST["furl"];
$URLMaps = $_POST["furl1"];
//$imagen = $_POST["imagen"];

//print_r($_POST);

if(isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['munic']) || isset($_POST['furl']) || isset($_POST['furl1']) || isset($_POST['imagen']))
  
{
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['munic'] = $_POST['munic'];
$_SESSION['furl'] = $_POST['furl'];
$_SESSION['furl1'] = $_POST['furl1'];
//$_SESSION['imagen'] = $_POST['imagen'];

$myfile = fopen("data.txt", "a") or die("No puedo abrir!");
$txt = "$NombreLugar;$Descripcion;$Municipio;$URLinfo;$URLMaps\n";
fwrite($myfile, $txt);
fclose($myfile);


}







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

if((strlen($NombreLugar) > 30)) {
  header("Location: nofunctiona.php");
}

if((strlen($Descripcion) > 100)) {
  header("Location: nofunctiona.php");
}

if((strlen($Municipio) > 30)) {
  header("Location: nofunctiona.php");
}

/*if(!$Imagen) {
  header("Location: nofunctiona.php");
}*/


$pattern = '/^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/';


set_error_handler(function(int $errno, string $errstr) {
  if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
      return false;
  } else {
      return true;
  }
}, E_WARNING);


if (!preg_match($pattern, $URLinfo)) {
  header("Location: nofunctiona.php");
 } 

if (!preg_match($pattern, $URLMaps)) {
  header("Location: nofunctiona.php");
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

    <?php
      $myfile = fopen("data.txt", "r") or die("Unable to open file!");

      while(!feof($myfile)) {
        $line = fgets($myfile);
        $array_line = explode(";", $line);
        echo "<tr>
                <td>
                  
                </td>
                <td>
                  ".$array_line[0]."
                </td>
                <td>
                ".$array_line[1]."
                </td>
                <td>
                  ".$array_line[2]."
                </td>
                <td>
                  ".$array_line[3]."
                </td>
                <td>
                  ".$array_line[4]."
                </td>
                <td>
                  imagen
                </td>                
              </td>";
      }
    ?>
  </table>

<marquee behavior="scroll" direction="left" class="htext">Hola</marquee>   
    
</body>
</html>