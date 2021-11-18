<?php
include ('/controllers/db.php');
include ('/menu.php');


$id = $_GET['id'];
$producto="SELECT * from producto WHERE id = $id";
$result = $conexion->query($producto);



if(!isset($_SESSION['nombre'])){

  header("Location: login.php");

}

if(isset($_POST['boton1'])){
  $sql="INSERT INTO `daw2`.`producto` VALUES (null,'$nombre', '$desc', '$precio') WHERE id =.$id";
  $consulta=mysqli_query($conexion,$sql);
}


if($result->num_rows > 0){
  while ($row = $result->fetch_assoc()){
    $ident = $row["id"];
    $nombre = $row["nom_product"];
    $desc = $row["desc_product"];
    $precio = $row["precio"];
  }
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
        

            echo "<div class='carousel-cell'>
            <h1>".$nombre."</h1>
            <p>".$desc."</p>
            <p>".$precio."</p>
            <a href='/content/contr_compr.php?id=".$ident."'>Comprar</a>
            <br>
            </div>";
            
          
        
     ?>
    </div>
  
  </div>
      
      </form>

    
    
</body>
</html>