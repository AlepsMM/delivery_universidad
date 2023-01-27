<?php
session_start();

// Verificar si el usuario está registrado
if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
  header("Location: index.php");
  exit();
}

// Destruir las variables de sesion
unset($_SESSION["logged_in"]);
unset($_SESSION["username"]);

// Redirigir al usuario al inicio de sesión
header("Location: index.php");
exit();
?>
