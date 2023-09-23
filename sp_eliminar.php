<?php
$id = $_GET['id'];
$cnx = mysqli_connect("localhost:3307", "root","","crud");
$sql = "DELETE FROM productos where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo "no se Elimino!";
}
else{
    header ("Location: index.php");
}

?>