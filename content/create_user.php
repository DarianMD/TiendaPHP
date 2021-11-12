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
            <form action="../controllers/contr_register.php" method="POST">
              <h1>
                Register
              </h1>
              <br>
              <br>
              <span class="subtitle">Usuario:</span>
              <br>
              <input type="text" name="username" placeholder="USERNAME" required maxlength="20">
              <br>
              <span class="subtitle">Contraseña:</span>
              <br>
              <input type="password" name="password" placeholder="PASSWORD" required  maxlength="20">
              <br>
              <span class="subtitle">Correo:</span>
              <br>
              <input type="email" name="email" placeholder="E-MAIL" required  maxlength="35">
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