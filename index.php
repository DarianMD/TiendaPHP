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
    <link rel="stylesheet" href="./styles/css/index.css">
</head>
<body>

  <div class="nav">
      <p>DarianShop</p>
      <a href="register.html">Registro</a>
      <a href="login.php">Login</a>
      <p> <?php echo "Usuario X" ?> </p>
  </div>


    <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>

    
      <?php 
        
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            echo "<div class='carousel-cell'>
            <h1>".$row["nom_product"]."</h1>
            <p>".$row["desc_product"]."</p>
            <p>".$row["precio"]."</p>
            <a href='logica.php?id=".$row["id"]."'>Login</a>
            <br>
            </div>";
            
          }
        } 
     ?>
    </div>
  

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>