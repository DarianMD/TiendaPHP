<?php
  include ('../controllers/db.php');
  include ('../controllers/funciones/include_funciones.php');
  $producto="SELECT * from producto";
  $result = $conexion->query($producto);

  $usuario="SELECT * from usuario";
  $resultado = $conexion->query($usuario);



  sessiones(2);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../styles/css/panel_admin.css">
</head>
<body>

  
  <button><a href="create_user.php">Crear Usuario</a></button>
  <div class="usuario">
      <?php 
        
         if($resultado->num_rows > 0){
          while ($row = $resultado->fetch_assoc()){
            $usuario = $row["ID"];

            $imagen = mostrarImagen_panel($usuario,1);


            echo "<div class='carousel-cell'>
            <img src='$imagen' width='100' height='100'>
            <h1>".$row["ID"]."</h1>
            <h1>".$row["USER"]."</h1>
            <p>".$row["PASSWD"]."</p>
            <p>".$row["EMAIL"]."</p>
            <p>".$row["rol"]."</p>
            <a href='crud_user.php?id=".$row["ID"]."'>Editar</a>
            <a href='contr_del_usr.php?id=".$row["ID"]."'>Borrar</a>
            <br>
            </div>";
            
          }
        } 
     ?>
  </div>
    

  <button><a href="create_product.php">Crear Producto</a></button>


  <div class="producto">
      <?php 
        
         if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
            $id = $row["id"];
            $imagen = mostrarImagen_panel($id,2);


            echo "<div class='carousel-cell'>
            <img src='$imagen' width='100' height='100'>
            <h1>".$row["nom_product"]."</h1>
            <p>".$row["desc_product"]."</p>
            <p>".$row["precio"]."</p>
            <a href='crud.php?id=".$row["id"]."'>Editar</a>
            <a href='contr_del_prod.php?id=".$row["id"]."'>Borrar</a>
            <br>
            </div>";
            
          }
        } 
     ?>  
  </div>

    

</body>
</html>