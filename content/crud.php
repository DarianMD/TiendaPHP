<?php
include ('../controllers/db.php');
include ('../menu.php');
include ('../controllers/funciones/include_funciones.php');

sessiones(2);


$id = $_GET['id'];

$producto="SELECT * from producto WHERE id = $id";
$result = $conexion->query($producto);



$_SESSION["rol"];

if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

  header("Location: ../login.php");

}

if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
                $nombre = $row["nom_product"];
                $desc = $row["desc_product"];
                $precio = $row["precio"];
}}

     

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

 
      <form action="contr_crud.php" method="POST" enctype="multipart/form-data">
                <img src="" alt="">
              <input type="" name="id" readonly value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $nombre;?>">
              <input type="text" name="descripcion" value="<?php echo $desc;?>">
              <input type="number" name="precio" value="<?php echo $precio;?>">
              <br>
              <label for="img" class="subtitle">Select image:</label>
              <input type="file" name="img_up">
              <input type="submit" value="SUBMIT" class="submit-btn">
            </form>

    
    
</body>
</html>