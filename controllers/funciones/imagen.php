<?php

function subirImagen($tipo,$imagen,$nombre_imagen,$id,$conexion){
    $ext = pathinfo($nombre_imagen, PATHINFO_EXTENSION);
    $nombre_imagen = $id.'.'.$ext;
    echo $id;

    if($tipo == 1){
        $nuevo_path="../styles/assets/".$id.'.'.$ext;

    }
    if($tipo == 2){
        $nuevo_path="../styles/assets/producto/".$id.'.'.$ext;
    }

    move_uploaded_file($imagen,$nuevo_path);


    if($tipo == 1){
        $insertar_imagen="UPDATE `daw2`.`usuario` SET IMAGEN = '$nombre_imagen' WHERE ID = '$id' ";

    }
    if($tipo == 2){
        $insertar_imagen="UPDATE `daw2`.`producto` SET imagen = '$nombre_imagen' WHERE id = '$id' ";
    }
    $imagen_insert=mysqli_query($conexion,$insertar_imagen);
}





function mostrarImagen_usr($id, $tipo){
    include ('../controllers/db.php');


    if($tipo == 1){
        $select="SELECT * from usuario WHERE ID = '$id'";


    }
    if($tipo == 2){
        $select="SELECT * from producto WHERE id = '$id'";

    }


    $resultado = $conexion->query($select);

    while ($row = $resultado->fetch_assoc()){
        if($tipo == 1){
            $imagen_usr = $row["IMAGEN"];
            $user = $row["USER"];
            $ruta_imagen = "../styles/assets/$imagen_usr";
            $ini = $user;
            $ini = substr($ini, 0,2);

        }
        if($tipo == 2){
            $imagen_usr = $row["imagen"];
            $user = $row["desc_product"];

            $ruta_imagen = "../styles/assets/producto/$imagen_usr";
            $ini = $user;
            $ini = substr($ini, 0,2);

        }
    }

    $imagen_final;

    if(file_exists($ruta_imagen)){
      return $imagen_final = $ruta_imagen;
    }
    else{
      return $imagen_final = "https://avatars.dicebear.com/api/initials/$ini.svg";

    }

}

?>

