<?php include "templates/navbar_usuario.php"?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras</title>
  <style>
   	div{
    	text-align: center;
    }
   </style>
</head>
<body>
  <div class="form-control">
  <h1>Compras Realizadas</h1>
    <div class="col-md-12">
  <div class="table-responsive">
  <table class="table form-control">
    <tr>
      <th>Username</th>
      <th>Detalle</th>
      <th>Total</th>
      <th>Fecha</th>
    </tr>
    <?php
    // Iniciar sesión
    session_start();
    // Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');

// Obtener el ID del usuario logueado
$username = $_SESSION['username'];

// Crear la consulta SQL para obtener las compras del usuario
$sql = "SELECT * FROM compras_productos WHERE username = '$username'";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Recorrer las compras y mostrarlas en la tabla
while($compra = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td>' . $compra['username'] . '</td>
            <td>' . $compra['detalle'] . '</td>
            <td>$' . $compra['total'] . '</td>
            <td>' . $compra['fecha'] . '</td>
        </tr>';
}

// Cierre de la conexión a la base de datos
mysqli_close($conn);
?>

</table>
</div>
</div>
</div>
</body>
</html>