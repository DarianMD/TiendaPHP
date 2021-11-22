<?php

$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];
$ext = pathinfo($name, PATHINFO_EXTENSION);
$nombre = "paquito";


echo $tmp_name;
echo "</br>";
echo $name;




$nuevo_path="".$nombre.'.'.$ext;
move_uploaded_file($tmp_name,$nuevo_path);






?>