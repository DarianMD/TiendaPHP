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
            $ini = $row["USER"];
            $ini = substr($ini, 0,2);

            $imagen_usr = $row["IMAGEN"];
            $ruta_imagen = "../styles/assets/$imagen_usr";


            if(file_exists($ruta_imagen)){
              $imagen_f = $ruta_imagen;
            }
            else{
              $imagen_f = "https://avatars.dicebear.com/api/initials/$ini.svg";

            }


            echo "<div class='carousel-cell'>
            <img src='$imagen_f' width='100' height='100'>
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

            $imagen_usr = $row["imagen"];
            $ruta_imagen = "../styles/assets/producto/$imagen_usr";


            $nom_prod = $row["desc_product"];

            if(file_exists($ruta_imagen)){
              $imagen_f = $ruta_imagen;
            }
            else{
              $imagen_f = "https://avatars.dicebear.com/api/initials/$nom_prod.svg";

            }

            echo "<div class='carousel-cell'>
            <img src='$imagen_f' width='100' height='100'>
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