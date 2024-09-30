<!DOCTYPE html>
<html lang="en">

<head class="c-header">
  <meta http-equiv="Content-Type" content="text/css; charset=UTF-8">
  </meta>
  <title>Supermercado</title>
  <link href="css/estilos1.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Rubik:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">

</head>
<h1><a href="carrito.php">Bienvenido al Emporio<br>con Delivery La Serena, Chile.</a></h1>
<section>
  <article>Sitio en Construcci&oacute;n</article>
  <article>+569 4070 4005</article>
</section>
<nav>
  <ul>
    <li><a href="index.html">Inicio</a></li>
    <li><a href="demo.html">Demo <acronym title="Planificacion de Recursos Empresariales">ERP</acronym></a></li>
    <li><a href="planes.html">Nuestros Planes</a></li>
    <li><a href="valores.html">Tablas</a></li>
    <li><a href="login1.html">Login</a></li>
    <li><a href="carrito.html">Compras</a></li>
  </ul>
</nav>

<body>
  <?php
  /*
  function ejecuta_consulta ($labusqueda){

    require("datos_conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");
    $consulta="SELECT * FROM productos WHERE nom_producto like '$labusqueda'";
    $resultados=mysqli_query($conexion,$consulta);
    while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){ // ERROR EN MYSQL_ASSOC
      echo "<table><tr><td>";
      echo $fila['id_producto'] . "</td><td>";
      echo $fila['num_dt'] . "</td><td>";
      echo $fila['nom_producto'] . "</td><td>";
      echo $fila['cant_ingreso'] . "</td><td>";
      echo $fila['valor_un'] . "</td><td>";
      echo $fila['total'] . "</td><td></tr></table>";
      echo "<br>";
      echo "<br>";
    }
    mysqli_close($conexion);
  }
*/
  require("conexion.php");
  $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
  if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la BBDD";
    exit();
  }

  mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
  mysqli_set_charset($conexion, "utf8");
  $consulta = "INSERT INTO id_producto (codigo_producto,nombre_producto) VALUES (?,?)";
  $resultados = mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
  ?>

  <div id="cuadroIndex">
    <center>
      <h1>La tiendita del Software</h1>
      <h3>Simples Soluciones en Software</h3>
    </center>
  </div>
  <aside>
    <h1><a href="planes.html">Ferreteria OnLine</a></h1>
    </header>
    <section class="contenedor">
      <div class="contenedor-item">
        <div class="item">
         <span class="titulo_item">Yeso Carton Volcanita 10mm</span>
        <img src="img/boxengassse.png" alt="" class="img-item"></img>
          <span class="precio-item">$ 7.990</span>
        <button class="boton-item">Agregar Carrito</button>
      </div>
  </aside>
  <div class="item">
    <span class="titulo_item">Caballo Blanco</span>
    <img src="img/caballoblanco.png" alt="" class="img_item"></img>
    <span class="precio-item">$ 29.900</span>
    <button class="boton-item">Agregar Carrito</button>
  </div>
  <div class="item">
    <span class="titulo_item">Caballo Negro</span>
    <img src="img/caballonegro.png" alt="" class="img_item"></img>
    <span class="precio-item">$ 29.900</span>
    <button class="boton-item">Agregar Carrito</button>
  </div>
  <div class="item">
    <span class="titulo_item">Rose</span>
    <img src="img/rose.png" alt="" class="img_item"></img>
    <span class="precio-item">$ 29.900</span>
    <button class="boton-item">Agregar Carrito</button>
  </div>
  </div>
  <div class="carrito">
    <div class="header-carrito">
      <h2>Tu Carrito</h2>
    </div>

    <div class="carrito-items">

      <div class="carrito-item">
        <img src="img/boxengasse.png" alt="" width="80px"></img>
        <div class="carrito-item-detalles">
          <span class="carrito-item-titulo">Box Engasse</span>
          <div class="selector-cantidad">
            <i class="fa-solid fa-minus restar-cantidad"></i>
            <input type="text" value="1" class="carrito-item-cantidad" disabled></input>
            <i class="fa-solid fa-plus sumar-cantidad"></i>
          </div>
          <span class="carrito-item-precio">$ 15.000</span>
        </div>
        <span class="btn-eliminar">
          <i class="fa-solid fa-trash"></i>
        </span>
      </div>
      <div class="carrito-item">
        <img src="img/caballoejemplo.png" alt="" width="80px"></img>
        <div class="carrito-item-detalles">
          <span class="carrito-item-titulo">Caballo Ejemplo</span>
          <div class="selector-cantidad">
            <i class="fa-solid fa-minus restar-cantidad"></i>
            <input type="text" value="1" class="carrito-item-cantidad" disabled></input>
            <i class="fa-solid fa-plus sumar-cantidad"></i>
          </div>
          <span class="carrito-item-precio">$ 15.000</span>
        </div>
        <span class="btn-eliminar">
          <i class="fa-solid fa-trash"></i>
        </span>
      </div>
    </div>
    <div class="carrito-total">
      <div class="fila">
        <strong>Tu Total</strong>
        <span class="carrito-precio-total">$ 120.000</span>
      </div>
      <button class="btn-pagar">Pagar</button>
    </div>
  </div>
  </section>
</body>

</html>