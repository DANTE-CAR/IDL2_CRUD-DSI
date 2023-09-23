<?php

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cnx = mysqli_connect("localhost:3307", "root","","crud");
$sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo "no se inserto!";
}
else{
    header ("Location: index.php");
}

?>