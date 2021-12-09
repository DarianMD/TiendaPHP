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
    <link rel="stylesheet" href="./styles/css/login.css">
</head>
<body>

      <div class="form-container">
        <form action="contr_rec_pass.php" method="POST">
          <h1>
            Login
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
          <br><br>
          <input type="submit" value="SUBMIT" class="submit-btn">
          <br>

        </form>
      </div>
</body>
</html>