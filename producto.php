<?php
  include ('/controllers/db.php');
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
    <link rel="stylesheet" href="./styles/css/producto.css">
</head>
<body>


  <div class="productos">
  <div class="main-carousel" data-flickity='{ "cellAlign": "left","freeScroll": true ,"wrapAround": true, "contain": true, "autoPlay": 2500,"pauseAutoPlayOnHover": false }'>
      <?php 
                include ('/controllers/funciones/imagen.php');

         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            
            $id = $row["id"];

            $imagen = mostrarImagen_usr($id,2);
  
            $ini = $row["nom_product"];
            $ini = substr($ini, 0,2);

            echo "<div class='carousel-cell'>
            <h1>".$row["nom_product"]."</h1>
            <p>".$row["desc_product"]."</p>
            <p>".$row["precio"]." €</p>
            <img src='$imagen' class='imagen' width='200' height='200'>
            <a href='logica.php?id=".$row["id"]."'>Comprar</a>
            <br>
            </div>";
            
          }
        } 
     ?>
    </div>
  
  </div>
    
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>