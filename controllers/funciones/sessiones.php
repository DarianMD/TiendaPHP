<?php


function sessiones($tipo){
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
    $_SESSION["rol"];

  if($tipo == 1) {
    if(!isset($_SESSION['nombre'])){

        header("Location: /login.php");
      
      }
  }
  if($tipo == 2){
    if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

        header("Location: /login.php");
    
      }

    
  }



}

?>