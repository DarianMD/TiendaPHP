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

?>