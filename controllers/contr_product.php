<?php
include ('db.php');
include ('../menu.php');
   

if(isset($_POST['nombre'])) { 
    $nombre = $_POST['nombre'];
}

if(isset($_POST['descr'])) { 
    $descrip = $_POST['descr'];
}

if(isset($_POST['precio'])) { 
    $prec = $_POST['precio'];
}





if($conexion){


        echo $nombre;

        echo $descrip;
        echo $prec;
        $sql="INSERT INTO `daw2`.`producto` VALUES (null,'$nombre', '$descrip', '$prec')";
         $consulta=mysqli_query($conexion,$sql);
}



?>
