<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" type= "text/css" href = "style.php">
</head>
<body>
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];

?>
<div>
<h1>CRUD de Productos</h1>
    <form action="sp_editar.php" method="post">
    <input type="text" name="id" style= "visibility:hidden" value="<?=$id?>">
        <input type="text" name="nombre" value=" <?=$nombre?>">
        <input type="text" name="precio" value=" <?=$precio?>">
        <button type="submit">Actualizar Producto</button>

</form>  
</div>
</body>
</html>