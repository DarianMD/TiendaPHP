<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/controllers/contr_ins_gold.php" method="POST">
    <h1>Insertar Efectivo</h1>
    <input type="number" name="dinero" min="1" max="999" maxlength="4" required >
    <input type="submit" value="SUBMIT" class="submit-btn">

    </form>
    
</body>
</html>