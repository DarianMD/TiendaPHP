<?php
include ('../controllers/db.php');

session_start();


if(isset($_GET['id'])) { 
    $id = $_GET['id'];
}

$id_usr = $_SESSION["id"];

$sel_din_prod="SELECT * FROM producto where id = '$id' ";
$sel_din_prod_query=mysqli_query($conexion,$sel_din_prod);
$row = $sel_din_prod_query->fetch_assoc();
$precio = $row["precio"];


$ins_din_usr="UPDATE usuario SET MONEY = MONEY - '$precio' where ID = '$id_usr'";
$ins_tiquet="INSERT INTO `daw2`.`tiquets` VALUES (null,'$id_usr', $id, CURRENT_TIMESTAMP)";
$sel_din_prod="SELECT * FROM usuario where MONEY < '$precio' ";
$consulta = $conexion->query($sel_din_prod);


if($conexion){
    $filas = mysqli_num_rows($consulta);

   
        $camb_money=mysqli_query($conexion,$ins_din_usr);
        $camb_tiquet=mysqli_query($conexion,$ins_tiquet);
    

 
 }

?>