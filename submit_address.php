<?php
    // Iniciar sesión
    session_start();

    // Conexión a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');

    // Recibir los datos del formulario
    $edificio = $_POST['edificio'];
    $salon = $_POST['salon'];
    $planta = $_POST['planta'];
    $usuario_id = $_SESSION['usuario_id'];

    // Validar que el usuario esté logueado
    if(!isset($_SESSION['usuario_id'])) {
        // Redirigir a la página de inicio de sesión
        header('Location: login.php');
    } else {
        // Crear la consulta SQL
        $sql = "INSERT INTO direcciones (edificio, salon, planta, usuario_id) VALUES ('$edificio', '$salon', '$planta', '$usuario_id')";

        // Ejecutar la consulta
        mysqli_query($conn, $sql);

        // Cerrar conexión
        mysqli_close($conn);

        // Redirigir a otra página o mostrar un mensaje de éxito
        header('Location: order.php');
    }
?>