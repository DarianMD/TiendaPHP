<?php
include ('../controllers/db.php');
include ('../controllers/funciones/include_funciones.php');



session_start();
sessiones(2);


$id = $_GET['id'];

$query = "SELECT * FROM usuario WHERE id = '$id'";
$result = $conexion->query($query);
$sql = mysqli_query($conexion, "SELECT * FROM usuario WHERE id ='$id'");

$nombre = "";




while($row = mysqli_fetch_assoc($sql)){
   $nombre =$row['USER'];
   $contra =$row['PASSWD'];
   $email = $row['EMAIL'];
   $rol = $row['rol'];
  
  }
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Producto</h1>

 
      <form action="contr_usr_crud.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="id" readonly value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $nombre;?>">
              <input type="text" name="contra" value="<?php echo $contra;?>">
              <input type="text" name="email" value="<?php echo $email;?>">
              <input type="text" name="rol" value="<?php echo $rol;?>">
              <label for="img" class="subtitle">Select image:</label>
              <input type="file" name="img_up">
              <input type="submit" value="SUBMIT" class="submit-btn">
            </form>

    
    
</body>
</html>