<?php

session_start();

if(isset($_SESSION['nombre'])){
  header("Location: index.php");

}


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
  <div class="flex-container">
    <div class="content-container">
      <div class="form-container">
        <form action="/controllers/contr_login.php" method="POST">
          <h1>
            Login
          </h1>
          <br>
          <br>
          <span class="subtitle">USERNAME OR E-MAIL:</span>
          <br>
          <input type="text" name="username" value="">
          <br>
          <span class="subtitle">PASSWORD:</span>
          <br>
          <input type="password" name="password" value="">
          <br><br>
          <input type="submit" value="SUBMIT" class="submit-btn">
        </form>
      </div>
    </div>
  </div>
</body>
</html>