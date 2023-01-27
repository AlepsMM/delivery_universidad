<?php
session_start();
?>
<?php include "templates/navbar_usuario.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Agregar Direccion</title>
</head>
<body>
<style>
   	div{
    	text-align: center;
    }
   </style>
   <div class="form-control" >
    <h1>Agregar Direccion</h1>
    <form class="form-control" action="submit_address.php" method="post">
  <input class="form-control" type="text" id="edificio" name="edificio" placeholder="Edificio">
  <br>
  <input class="form-control" type="number" id="salon" name="salon" placeholder="Salon">
  <br>
  <input class="form-control" type="text" id="planta" name="planta" placeholder="Planta">
  <br>
  <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">
  <button class="btn btn-primary" type="submit" value="Submit">Registrar</button>
</form>
</div>
</body>
</html>