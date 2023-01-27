<?php

// Recolectar información del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Conectarse a la base de datos
$conn = new mysqli('localhost', 'root', '', 'tienda_dulces');

// Verificar si el nombre de usuario ya existe en la base de datos
$query = "SELECT * FROM usuarios WHERE username='$username'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    // Si el nombre de usuario ya existe, enviar una alerta de error
    echo "<script>alert('El nombre de usuario ya existe, por favor elige otro'); window.location.href='index.php';</script>";
} else {
    // Si el nombre de usuario no existe, registrar al usuario en la base de datos
    $query = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        // Si el registro fue exitoso, enviar una alerta de registro exitoso
        echo "<script>alert('Registro exitoso'); window.location.href='index.php';</script>";
    } else {
        // Si el registro falló, enviar una alerta de error
        echo "<script>alert('Error al registrarse'); window.location.href='index.php';</script>";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

?>