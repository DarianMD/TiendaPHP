<?php
include ('../controllers/db.php');
include ('../menu.php');


$id = $_GET['id'];

$usuario="SELECT * from usuario WHERE id = $id";
$resultado = $conexion->query($usuario);



if($resultado-> num_rows > 0){
        while ($row = $resultado->fetch_assoc()){
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

 
      <form action="contr_crud.php" method="POST">
                <img src="" alt="">
              <input type="" name="id" readonly value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $nombre;?>">
              <input type="text" name="descripcion" value="<?php echo $desc;?>">
              <input type="number" name="precio" value="<?php echo $precio;?>">
              <input type="submit" value="SUBMIT" class="submit-btn">
            </form>

    
    
</body>
</html>