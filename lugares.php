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
    <tr>
      <td><?php 
      session_start();
      echo $_SESSION['fname']
       ?></td>
      <td><?php 
      echo $_SESSION['fname']
       ?></td>
      <td><?php 
      echo $_SESSION['lname']
       ?></td>
      <td><?php 
      echo $_SESSION['munic']
       ?></td>
      <td><?php 
      echo $_SESSION['furl']
       ?></td>
      <td><?php 
      echo $_SESSION['furl1']
       ?></td>
    </tr>
  
      
    </tr>
  </table>




<marquee behavior="scroll" direction="left" class="htext">Hola</marquee>   
    
</body>
</html>