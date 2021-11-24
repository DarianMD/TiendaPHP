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
    <link rel="stylesheet" href="./styles/css/menu.css">
</head>
<body>


<main class="main">
        <aside class="sidebar">
          <nav class="nav">
            <ul>
              <li class="active"><a href="#">Inicio</a></li>
              <?php
        
        session_start();

       

        if(!isset($_SESSION['nombre'])){
          echo "<li><a href='/login.php'>Login</a></li>";

        }
       else{

         if($_SESSION["rol"] == 'a'){
           echo '<br>';
          echo "<li><a href='/content/panel-admin.php'>Panel Admin</a></li>";

         }
         if($_SESSION["rol"] == 'u'){
          echo '<br>';
          echo "<li><a href='/usr_perfil.php?id=".$_SESSION["id"]."'>Mi Perfil</a></li>";

          echo '<br>';
          echo "<li><a href='/usr_compras.php?id=".$_SESSION["id"]."'>Mis Compras</a></li>";
          ;
          echo '<br>';
          echo "<li><a href='/insert_gold.php?id=".$_SESSION["id"]."'>Mi Perfil</a></li>";

          
          
        }
         echo '<br>';
         echo "<li><a href='/logout.php'>Logout</a></li>";


       }
      
      ?>
            </ul>
          </nav>
        </aside>
      
     
      </main>




</nav>