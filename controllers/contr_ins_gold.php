<?php

session_start();
include ('db.php');

$id = $_SESSION['id'];
echo $id;

if(isset($_POST['dinero'])) { 
    $dinero = $_POST['dinero'];
}

$long = strlen($dinero);

if($long > 3){
    echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";

}
else{
    $money_sel="UPDATE usuario SET MONEY =  MONEY + $dinero WHERE ID = '$id' ";
    $money_ins=mysqli_query($conexion,$money_sel);

}



?>
