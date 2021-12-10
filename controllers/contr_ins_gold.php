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
    echo "<script>alert('No se permite más de 999€);</script>";

}
else{
    $money_sel="UPDATE usuario SET MONEY =  MONEY + $dinero WHERE ID = '$id' ";
    $money_ins=mysqli_query($conexion,$money_sel);
    echo "<SCRIPT> //not showing me this
    alert('Cantidad Ingresada')
    window.location.replace('/index.php');
</SCRIPT>";

}



?>
