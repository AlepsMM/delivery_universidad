<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Crea tu cuenta</title>
</head>
<body>
<div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Registrate
                    </div>
    <form class="form-control" action="register.php" method="post">
      <input type="text" id="username" name="username" placeholder="Usuario" required>
      <br>
      <input type="password" id="password" name="password" placeholder="Contraseña" required>
      <br>
      <button type="submit" value="">Registrarse</button>
    </form>
                </div>
              <div class="inferior">
                    <a href="index.php">Volver</a>
                </div>
            </div>
        </div>
</body>
</html>