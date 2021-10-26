<?php
include ('/controllers/db.php');
$id = $_GET['id'];
$producto="SELECT * from producto WHERE id = $id";
$result = $conexion->query($producto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Producto</h1>


    <div class="productos">
  <div class="main-carousel" data-flickity='{ "cellAlign": "left","freeScroll": true ,"wrapAround": true, "contain": true, "autoPlay": 2500,"pauseAutoPlayOnHover": false }'>
      <?php 
        
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            echo "<div class='carousel-cell'>
            <h1>".$row["nom_product"]."</h1>
            <p>".$row["desc_product"]."</p>
            <p>".$row["precio"]."</p>
            <a href='logica.php?id=".$row["id"]."'>Comprar</a>
            <br>
            </div>";
            
          }
        } 
     ?>
    </div>
  
  </div>
    
</body>
</html>