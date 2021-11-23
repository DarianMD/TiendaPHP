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

        $sql="INSERT INTO `daw2`.`producto` VALUES(null,'$nombre', '$descrip', '$prec','')";
         $consulta=mysqli_query($conexion,$sql);


         $selec="SELECT * FROM producto WHERE id=(SELECT max(id) FROM producto);";
        $selectid=mysqli_query($conexion,$selec);

        while($row = mysqli_fetch_assoc($selectid)){    
            $ident =$row['id'];
  
        } 



    $tmp_name = $_FILES['img_up']["tmp_name"];
    $name = $_FILES['img_up']["name"];
    $ext = pathinfo($name, PATHINFO_EXTENSION);
    $imagen = $ident.'.'.$ext;
    $nuevo_path="../styles/assets/producto/".$ident.'.'.$ext;
    move_uploaded_file($tmp_name,$nuevo_path);

    $insertar_imagen="UPDATE `daw2`.`producto` SET imagen = '$imagen' WHERE id = '$ident' ";
    $imagen_insert=mysqli_query($conexion,$insertar_imagen); 

     
}



?>
