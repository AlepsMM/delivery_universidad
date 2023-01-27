<?php 
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
$total = 0;
?>
<?php include "templates/navbar_usuario.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Order</title>
    <style>
   	div{
    	text-align: center;
    }
   </style>
</head>
<body class="text-bg-dark">
    <div class="form-control text-bg-dark">
    <form action="carrito.php" method="post" class="form-control text-bg-dark">
    <div id="session form-control">
<h1 class="badge text-bg-light ">Bienvenido, <?php echo $_SESSION["username"]; ?></h1><br>
</div>
<a class="btn btn-danger" href="logout.php">Cerrar sesión</a>
  <h2>Seleccione los dulces que desea comprar</h2>
  <div class="input-group mb-3">
  <select class="form-select" id="inputGroupSelect02">
    <option selected>Escoge una direccion</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  <label class="input-group-text" for="inputGroupSelect02">🚩</label>
</div>

  <?php 
    //conexion a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
    //consulta para obtener los dulces de la tabla
    $query = "SELECT * FROM dulces";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
  ?>
  
    <div class="dulce form-control text-bg-dark">
      <label for="<?php echo $row['nombre'] ?>"><?php echo $row['nombre'] ?></label>
      <input class="text-bg-dark" type="number" id="<?php echo $row['nombre'] ?>" name="<?php echo $row['nombre'] ?>" value="0" min="0" max="10" data-precio="<?php echo $row['precio'] ?>">
      <button class="text-bg-dark" type="button" onclick="incrementar('<?php echo $row['nombre'] ?>')">+</button>
      <button class="text-bg-dark" type="button" onclick="decrementar('<?php echo $row['nombre'] ?>')">-</button>
      <span  class="badge text-bg-light">Precio: $<?php echo $row['precio'] ?></span>
    </div><br>
    <?php } ?>
  <input type="submit"  class="btn btn-light mt-4" value="Comprar" name="comprar">
  <br>
  <span class="badge text-bg-primary" id="total"></span>
</form>
<script src="js/script.js"></script>
</body>
</html>