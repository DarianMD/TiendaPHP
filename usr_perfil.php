<?php
session_start();
$_SESSION["rol"];

if(!isset($_SESSION['nombre'])){

  header("Location: ../login.php");

}

include ('/controllers/db.php');

$id = $_GET['id'];

$usuario="SELECT * from usuario WHERE ID = '$id'";
$resultado = $conexion->query($usuario);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/css/user_profile.css">
</head>
<body>
<section class="menu"><?php include ('menu.php');?></section>

    <div class="usuario">
      <?php 
        

        include ('/controllers/funciones/imagen.php');
        



         if($resultado->num_rows > 0){
    

          while ($row = $resultado->fetch_assoc()){
            $id = $row["ID"];

            $imagen = mostrarImagen_usr($id,1);
  
            $ini = $row["USER"];
            $ini = substr($ini, 0,2);
            echo "<div class='carousel-cell'>
            <img src='$imagen' class='imagen' width='100' height='100'>
            <h2>Nombre Usuario</h2>
            <h1>".$row["USER"]."</h1>
            <h2>Contraseña</h2>
            <p>".$row["PASSWD"]."</p>
            <h2>Email</h2>
            <p>".$row["EMAIL"]."</p>
            <h2>Primer Acceso</h2>
            <p>".$row["FIRST_LOGIN"]."</p>
            <h2>Ultimo Acceso</h2>
            <p>".$row["LAST_LOGIN"]."</p>
            <h2>Dinero</h2>
            <p>".$row["MONEY"]."</p>
            <br>
            </div>";
            
          }
        } 
     ?> 
  </div>
     

    
    
</body>
</html>