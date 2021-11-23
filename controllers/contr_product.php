<?php
include ('db.php');
include ('../menu.php');
include ('./funciones/include_funciones.php');
   

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
   

    subirImagen(2,$tmp_name,$name,$ident,$conexion);
     
}



?>
