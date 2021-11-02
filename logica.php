<?php
include ('/controllers/db.php');
include ('/menu.php');


$id = $_GET['id'];
$producto="SELECT * from producto WHERE id = $id";
$result = $conexion->query($producto);


session_start();

if(session_id() == ''){
    header("Location:login.php");
}


if(isset($_POST['boton1'])){
  $sql="INSERT INTO `daw2`.`producto` VALUES (null,'$nombre', '$desc', '$precio') WHERE id =.$id";
  $consulta=mysqli_query($conexion,$sql);
}



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


    <form method="post">
    <div class="productos">
  <div class="main-carousel" data-flickity='{ "cellAlign": "left","freeScroll": true ,"wrapAround": true, "contain": true, "autoPlay": 2500,"pauseAutoPlayOnHover": false }'>
    <form method="post">

    </form>
      <?php 
        
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            $nombre = $row["nom_product"];
            $desc = $row["desc_product"];
            $precio = $row["precio"];

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
      
      </form>

    
    
</body>
</html>