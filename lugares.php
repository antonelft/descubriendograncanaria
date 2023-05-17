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
$imagen = $_FILES["imagen"]["name"];

print_r($_FILES);
print_r($_POST);

if(isset($_POST['fname']) || isset($_POST['lname']) || isset($_POST['munic']) || isset($_POST['furl']) || isset($_POST['furl1']) || isset($_FILES['imagen']))
  
{
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['munic'] = $_POST['munic'];
$_SESSION['furl'] = $_POST['furl'];
$_SESSION['furl1'] = $_POST['furl1'];
//$_SESSION['imagen'] = $_POST['imagen'];




}



if(!$NombreLugar) {
  header("Location: nofunctiona.php");
}

if(!$Municipio) {
  header("Location: nofunctiona.php");
}

if(!$Descripcion) {
  header("Location: nofunctiona.php");
}


$pattern = '/^(https?:\/\/)?([\da-z.-]+)\.([a-z.]{2,6})([\/\w.-]*)*\/?$/';

if(!preg_match($pattern, $URLinfo) && !preg_match($pattern, $URLMaps)) {
  header("Location: nofunctiona.php");
} else {


  $fileUploadDir = "./upload";

  echo "<br>Tmp name of the file:".$_FILES["imagen"]["tmp_name"];
  echo "<br>Destination file:".$fileUploadDir."/".$_FILES["imagen"]["name"];
    if (!(move_uploaded_file($_FILES["imagen"]["tmp_name"], $fileUploadDir."/".$_FILES["imagen"]["name"])))
        echo "<br>Error al subir el fichero";

$myfile = fopen("datax.csv", "a") or die("No puedo abrir!");
$txt = "$NombreLugar;$Descripcion;$Municipio;$URLinfo;$URLMaps;$imagen\n";
fwrite($myfile, $txt);
fclose($myfile);



  echo "KINDER BUENO";
  header("Location: miralugares.php");
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

if((strlen($URLinfo) > 150)) {
  header("Location: nofunctiona.php");
}

if((strlen($URLMaps) > 150)) {
  header("Location: nofunctiona.php");
}


/*if(!$Imagen) {
  header("Location: nofunctiona.php");
}*/





set_error_handler(function(int $errno, string $errstr) {
  if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
      return false;
  } else {
      return true;
  }
}, E_WARNING);

 






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
      $myfile = fopen("datax.csv", "r") or die("Unable to open file!");

      //$datax = array();

      while(!feof($myfile)) {
        $line = fgets($myfile);
        $array_line = explode(";", $line);
        //$datax[] = explode(";",fgets($myfile));
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
                  ".$array_line[5]."
                </td>                
              </td>";
      }
    ?>
  </table>

<marquee behavior="scroll" direction="left" class="htext">Hola</marquee>   
    
</body>
</html>