<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type= "text/css" href = "style.php">
</head>
<body>
    <div>
    <h1>CRUD de Productos</h1>
    <form action="sp_insertar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre del Producto" required>
        <input type="text" name="precio" placeholder="Nombre del Producto"required>
        <button type="submit">Agregar Producto</button>

    </form>
    <div id="product-list">
        <table>
                <tr>
                <h3>Registro de BASE DE DATOS phpMyAdmin</h3>
                    <td>Numero</td>
                    <td>NOMBRE</td>
                    <td>PRECIO_S/</td>
                </tr>
            <?php
                $cnx = mysqli_connect("localhost:3307", "root","","crud");
                $sql = "SELECT id, nombre, precio FROM productos order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar['0'] ?></td>
                    <td><?php echo $mostrar['1'] ?></td>
                    <td><?php echo $mostrar['2'] ?></td>
                    <td>
                        <a href="editar.php?
                        id= <?php echo $mostrar['0']?>&
                        nombre=<?php echo $mostrar['1']?>&
                        precio=<?php echo $mostrar['2']?>&
                        
                        ">ACTUALIZAR</a> <br><br>

                        <a href="sp_eliminar.php? id= <?php echo $mostrar['0']?>">ELIMINAR</a>

                    </td>
                </tr>
                <?php
                }
                ?>|
            </table>
    </div>
</body>
</html>