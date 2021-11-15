<?php
  session_start();
  $_SESSION["rol"];
  
  if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

    header("Location: ../login.php");

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./styles/css/register.css">
</head>
<body>
    <div class="flex-container">
        <div class="content-container">
          <div class="form-container">
            <form action="/controllers/contr_product.php" method="POST">
              <h1>
                Register
              </h1>
              <br>
              <br>
              <span class="subtitle">Nombre Producto:</span>
              <br>
              <input type="text" name="nombre" placeholder="Ej: Galletas Pascual" required maxlength="20">
              <br>
              <span class="subtitle">Descripcion Producto:</span>
              <br>
              <input type="descr" name="descr" placeholder="Ej: Galleta de pan" required  maxlength="20">
              <br>
              <span class="subtitle">Precio:</span>
              <br>
              <input type="text" name="precio" placeholder="Ejemplo: 39" required  maxlength="35">
              <br>
              <label for="img" class="subtitle">Select image:</label>
              <input type="file" id="img" name="img" accept="image/*">
              <br>
              <input type="submit" value="SUBMIT" class="submit-btn">
            </form>
          </div>
        </div>
      </div>
</body>
</html>