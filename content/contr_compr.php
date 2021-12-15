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
$sel_din_prod_comp="SELECT * FROM usuario where MONEY < '$precio' ";
$consulta = mysqli_query($conexion,$sel_din_prod_comp);


if($conexion){
    if($consulta > 0){
      

      

    $moneyzero="SELECT * FROM usuario where ID = '$id_usr' ";
    $money_query=mysqli_query($conexion,$moneyzero);
    $money_dat = $money_query->fetch_assoc();
    $money = $money_dat["MONEY"];


    if($money < 0){
        $insr_final="UPDATE usuario SET MONEY = 0 where ID = '$id_usr'";
        $money_final=mysqli_query($conexion,$insr_final);

    }

    echo "<SCRIPT> //not showing me this
            alert('No puedes comprar')
            window.location.replace('../index.php');
        </SCRIPT>";
   

    }
    else{
        $camb_money=mysqli_query($conexion,$ins_din_usr);
        $camb_tiquet=mysqli_query($conexion,$ins_tiquet);

       
    }
   
       
    

 
 }

?>