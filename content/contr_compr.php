<?php

session_start();



if(isset($_GET['id'])) { 
    $id = $_GET['id'];
}


$money_sel="UPDATE usuario SET MONEY =  MONEY + $dinero WHERE ID = '$id' ";
$money_ins=mysqli_query($conexion,$money_sel);



?>