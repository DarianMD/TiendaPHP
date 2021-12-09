<?php


include ('./controllers/db.php');
session_start();

$id = $_GET['id'];

$sql = mysqli_query($conexion, "SELECT *
FROM tiquets a
INNER JOIN usuario b
ON a.id_usuario = b.ID
INNER JOIN producto c
ON a.id_producto = c.id
WHERE b.ID = '$id'");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/css/usr_producto.css">
</head>
<body>

<section class="menu"><?php include ('menu.php');?></section>

<div class="productos">

  <div>
      <?php 
     
            while ($row = mysqli_fetch_assoc($sql)){
              echo "<div class='carousel-cell'>
              <p>".$row["id_usuario"]."</p>
              <p>".$row["USER"]."</p>
              <p>".$row["id_producto"]."</p>
              <p>".$row["nom_product"]."</p>
              <p>".$row["precio"]." €</p>
              <p>".$row["desc_product"]."</p>
              <p>".$row["fecha"]."</p>
              <br>
              </div>";
              
            }
          
     ?>

     

    </div>
  
  </div>
    
</body>
</html>