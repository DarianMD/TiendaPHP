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




<nav class="navigation-wrapper">
  <ul class="nav-list">
    <li class="nav-item">
      <a href="/"><em>Home</em></a>
    </li>
    
    <li class="nav-item">
      <?php
        
        session_start();

        if(!isset($_SESSION['nombre'])){
          echo "<a href='/login.php'><em>Login</em></a>";

        }
       else{
         echo $_SESSION["nombre"];
         if($_SESSION["rol"] == 'a'){
           echo '<br>';
          echo "<a href='/content/panel-admin.php'><em>Panel Admin</em></a>";
         }
         if($_SESSION["rol"] == 'u'){
          echo '<br>';
          echo "<a href='/usr_perfil.php'><em>Mi Perfil</em></a>";
          echo '<br>';
          echo "<a href='/usr_compras.php'><em>Mis Compras</em></a>";
          echo '<br>';
          echo "<a href='/usr_compras.php'><em>Ingresar efectivo</em></a>";

          
        }
         echo '<br>';
         echo "<a href='/logout.php'><em>Logout</em></a>";

       }
      
      ?>
    </li>
 
  </ul>
</nav>