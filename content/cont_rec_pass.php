<?php
include ('../controllers/db.php');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../styles/css/rec_pass.css">
</head>
<body>

    
      <div class="flex-container">
    <div class="content-container">
      <div class="form-container">
      <form action="contr_rec_pass.php" method="POST">
          <h1>
            Recuperar Contraseña
          </h1>
          <br>
          <br>
          <span class="subtitle">Email o Usuario:</span>
          <br>
          <input type="email" name="username" value="" placeholder="Email" required>
          <br>
          <span class="subtitle">Nueva Contraseña:</span>
          <br>
          <input type="password" name="password" value="" placeholder="Nueva Contraseña" required>
          <br>
          <span class="subtitle"><a href="../../index.php"><b>Inicio</b></a>:</span>

        <br><br>

          <input type="submit" value="SUBMIT" class="submit-btn">
          
          <br>

        </form>
      </div>
    </div>
  </div>
</body>
</html>