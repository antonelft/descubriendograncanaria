<!DOCTYPE html>
<html lang="en">
<head>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body id="bd">
    <h1 id="gh">Descubriendo Gran Canaria</h1>
    <a href="./index.html"><button class="noivo" >Atras</button></a>
<a href="./lugares.php"><button class="lugares">Lugares que no me puedo perder</button></a>





<form id="fm1" method="post">
    <label for="fname">Nombre del lugar:</label><br>
    <input type="text" id="loc" name="fname"><br>
    <label for="lname">Descripcion:</label><br>
    <input type="text" id="loc1" name="lname">



    <label for="munic" id="munict">Municipio donde se encuentra:</label><br>
    <select name="munic" id="munic">
    <option value="Las Palmas de Gran Canaria">Las Palmas de Gran Canaria</option>  
    <option value="Agaete">Agaete</option>  
    <option value="Agüimes">Agüimes</option>  
    <option value="Artenara">Artenara</option>  
    <option value="Arucas">Arucas</option>  
    <option value="Firgas">Firgas</option>  
    <option value="Gáldar">Gáldar</option>  
    <option value="Ingenio">Ingenio</option>  
    <option value="La Aldea de San Nicolás">La Aldea de San Nicolás</option>  
    <option value="Mogán">Mogán</option>  
    <option value="Moya">Moya</option>  
    <option value="San Bartolomé de Tirajana">San Bartolomé de Tirajana</option>  
    <option value="Santa Brígida">Santa Brígida</option>  
    <option value="Santa Lucía de Tirajana">Santa Lucía de Tirajana</option>  
    <option value="Santa María de Guía de Gran Canaria">Santa María de Guía de Gran Canaria</option>  
    <option value="Tejeda">Tejeda</option>  
    <option value="Telde">Telde</option>  
    <option value="Teror">Teror</option>  
    <option value="Valleseco">Valleseco</option>  
    <option value="Valsequillo de Gran Canaria">Valsequillo de Gran Canaria</option>  
    <option value="Vega de San Mateo">Vega de San Mateo</option>  
    </select>




<label for="furl" id="urlinf">URL con mas information:</label>
<input type="text" id="urlinfox" name="furl"><br>
<label for="furl1" id="urlinf1">URL con enlace a Google Maps:</label>
<input type="text" id="urlinfox1" name="furl1"><br>



<label for="upt" id="upt"><b>Imagen:</b></label>
    <input type="file" id="upt" name="filename">

    <input type="submit" name="submit">

  </form>
  
<?php


/*
  session_start();

  if(isset($_POST['fname']))
  
{
$_SESSION['fname'] = $_POST['fname'];
$data=$_POST['fname'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

  if(isset($_POST['lname']))
  
{
$_SESSION['lname'] = $_POST['lname'];
$data=$_POST['lname'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['munic']))
  
{
$_SESSION['munic'] = $_POST['munic'];
$data=$_POST['munic'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['furl']))
  
{
$_SESSION['furl'] = $_POST['furl'];
$data=$_POST['furl'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

if(isset($_POST['furl1']))
  
{
$_SESSION['furl1'] = $_POST['furl1'];
$data=$_POST['furl1'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grancan";

/*try {
  
        $fname =  $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $munic =  $_REQUEST['munic'];
        $furl = $_REQUEST['furl'];
        $furl1 = $_REQUEST['furl1'];


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO pueblos (ID, visitado, descripcion, municipio, urlinfo, urlmaps)
  VALUES ('$fname','$lname','$munic','$furl','$furl1')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
*/




?>



<h1 id="anadir">Agregado</h1>



</body>
</html>