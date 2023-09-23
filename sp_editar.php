<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];


$cnx = mysqli_connect("localhost:3307", "root","","crud");
$sql = "UPDATE productos set nombre= '$nombre', precio= '$precio' where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo "no se Actualizo!";
}
else{
    header ("Location: index.php");
}

?>