<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Parámetros enviados por el cliente</p>
    
    <?php 
    var_dump($_GET); 
    ?>

    <p>Tu nombre es: <?php echo $_GET["nombreusuario"]?></p>
    
</body>
</html>