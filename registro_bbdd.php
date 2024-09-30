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
  $cod=$_GET["codigo_producto"];
  $nom=$_GET["nombre_producto"];
  $cat=$_GET["categoria_producto"];
  $descrip=$_GET["descripcion"];
  $fecha=$_GET["fecha"];
  $user=$_GET["user"];
    
  require("conexion.php");
  $conexion_bd=mysqli_connect($db_host,$db_usuario,$db_contra);
  if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
  }

  mysqli_select_db($conexion_bd,$db_nombre) or die ("No se encuentra la BBDD");
  mysqli_set_charset($conexion_bd, "utf8");
  $consulta="INSERT INTO productos (codigo_producto,nombre_producto,categoria_producto,descripcion,fecha_registro,registrado_por) VALUES ('$cod','$nom','$cat','$descrip','$fecha','$user')";
  $resultados=mysqli_query($conexion_bd,$consulta);

  if ($resultados==false) {
    echo "Error en la Consulta";
  } else {
    echo "Registro Guardado<br><br>";
    echo "<table><tr><td>$cod</td></tr>";
    echo "<tr><td>$nom</td></tr>";
    echo "<tr><td>$cat</td></tr>";
    echo "<tr><td>$descrip</td></tr>";
    echo "<tr><td>$fecha</td></tr>";
    echo "<tr><td>$user</td></tr></table>";
    
  }
 
  
  mysqli_close($conexion_bd);
?>
</body>
</html>