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
      <a href="#/"><em>Home</em></a>
    </li>
    
    <li class="nav-item">
      <?php
        if(session_id() == ''){
          echo "<a href='login.php'><em>Login</em></a>";

        }
       else{
         echo "Usuario X";
         echo "<br>";
         echo "<a href='logout.php'><em>Logout</em></a>";

       }
      
      ?>
    </li>
 
  </ul>
</nav>