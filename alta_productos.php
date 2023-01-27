<?php
// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');

// Verificación de la conexión a la base de datos
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verificación de la acción de agregar un dulce
if (isset($_POST['agregar_productos'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Inserción de un nuevo dulce en la tabla
    $query = "INSERT INTO dulces (nombre, precio) VALUES ('$nombre', '$precio')";
    if (mysqli_query($conn, $query)) {
        echo "Dulce agregado correctamente.";
    } else {
        echo "Error al agregar el dulce: " . mysqli_error($conn);
    }
}

// Cierre de la conexión a la base de datos
mysqli_close($conn);
?>