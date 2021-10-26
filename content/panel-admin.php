<?php
  include ('../controllers/db.php');
  $producto="SELECT * from producto";
  $result = $conexion->query($producto);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./styles/css/index.css">
</head>
<body>

    <h1>Panel administración</h1>

    <form action="crud.php" method="post" class="crear">
    <h1>Titulo Producto</h1>
    <input type="text" placeholder="titulo" name="title">
    <h1>Descripción</h1>
    <input type="text" placeholder="titulo" name="desc">
    <h1>Precio</h1>
    <input type="text" placeholder="precio" name="precio">

    <input type="submit" value="crear">

    </form>


  <div class="productos">
  <div class="main-carousel" data-flickity='{ "cellAlign": "left","freeScroll": true ,"wrapAround": true, "contain": true, "autoPlay": 2500,"pauseAutoPlayOnHover": false }'>
      <?php 
        
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            echo "<div class='carousel-cell'>
            <h1>".$row["nom_product"]."</h1>
            <p>".$row["desc_product"]."</p>
            <p>".$row["precio"]."</p>
            <a href='logica.php?id=".$row["id"]."'>Editar</a>
            <a href='logica.php?id=".$row["id"]."'>Borrar</a>
            <br>
            </div>";
            
          }
        } 
     ?>
    </div>
  
  </div>
    

    

</body>
</html>