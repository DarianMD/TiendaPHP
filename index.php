<?php
  include ('/controllers/db.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./styles/css/index.css">
</head>
<body>


  
    <div class="div">
      <section class="menu"><?php include ('menu.php');?></section>
    </div>
    <section class="producto">  <?php include ('producto.php');?></section>


    

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>