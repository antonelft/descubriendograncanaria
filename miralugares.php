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


    set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
    }, E_WARNING);









      $myfile = fopen("datax.csv", "r") or die("Unable to open file!");

      //$datax = array();

      while(!feof($myfile)) {
        $line = fgets($myfile);
        $array_line = explode(";", $line);
        //$datax[] = explode(";",fgets($myfile));
        echo "<tr>
                <td>
                  <td><input type='checkbox'></td>;
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
                    <img src='upload/".$array_line[5]."' width='200px'></td> 
                </td>                
              </td>";
      }
    ?>
  </table>

<marquee behavior="scroll" direction="left" class="htext">Hola</marquee>   
    
</body>
</html>