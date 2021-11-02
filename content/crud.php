<?php
include ('../controllers/db.php');
include ('../menu.php');


$id = $_GET['id'];
$producto="SELECT * from producto WHERE id = $id";
$result = $conexion->query($producto);


session_start();

if(session_id() == ''){
    header("Location:login.php");
}

if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
                $nombre = $row["nom_product"];
                $desc = $row["desc_product"];
                $precio = $row["precio"];   
}}

     
if($conexion){
        $sql="UPDATE `daw2`.`producto` SET nom_product = '$nombre', desc_product = '$desc', precio = '$precio' WHERE id = '$id' ";
         $consulta=mysqli_query($conexion,$sql);
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

 w
      <form action="contr_crud.php" method="POST">
              <input type="" name="id" readonly value="<?php echo $id;?>">
              <input type="text" name="nombre" value="<?php echo $nombre;?>">
              <input type="text" name="descripcion" value="<?php echo $desc;?>">
              <input type="number" name="precio" value="<?php echo $precio;?>">
              <input type="submit" value="SUBMIT" class="submit-btn">
            </form>

    
    
</body>
</html>