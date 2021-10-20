<?php

include('../controllers/db.php');

session_start();

if(isset($_POST['enviar'])){
    $nombre_product = $_POST['nom_product'];
    $desc_product = $_POST['desc_product'];
    $precio_product = $_POST['precio_product'];
}

 mysqli_set_charset($conexion,"utf8");


/*$comprobacion="SELECT nom_product FROM producto WHERE nom_product=".$nombre_product;
$res=mysql_query($conexion,$comprobacion); */


//if(mysql_num_rows($res) == 0){
    if($conexion){
        $sql="INSERT INTO `daw2`.`producto` (`nom_product`, `desc_product`, `precio`) VALUES ('$desc_product', '$desc_product', '$precio_product')";
        $consulta=mysqli_query($conexion,$sql);
        
        echo "Registro realizado correctamente";
    
    
    }
//}


$producto="SELECT * from producto";
$rs=mysqli_query($selecion,$producto) or die(mysql_error());
$result=mysql_fetch_array($rs);


echo '<table>
<tr>
<td>Forename</td>
<td>Surname</td>
</tr>
<tr>
<td>'.$result["nom_product"].'</td>
<td>'.$result["desc_product"].'</td>
<td>'.$result["precio"].'</td>
</tr>
</table>';

?>