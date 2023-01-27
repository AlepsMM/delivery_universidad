<?php include "templates/navbar.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
</head>
  <div class="form-control">
<body >
    <table class="form-control">
    <h1>Baja de Productos</h1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
                $query = "SELECT * FROM dulces";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td>$<?php echo $row['precio']; ?></td>
                    <td>
                        <form action="eliminar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
