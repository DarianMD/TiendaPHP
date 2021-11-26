<?php

 include ('../controllers/db.php');
 include ('../controllers/funciones/include_funciones.php');


 session_start();



 if(isset($_POST['username'])) { 
    $username = $_POST['username'];
}

if(isset($_POST['password'])) { 
    $password = $_POST['password'];
}



login($username,$password);

?>

