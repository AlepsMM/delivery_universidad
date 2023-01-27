<?php 
    //conexion a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
    if(isset($_POST['actualizar'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $query = "UPDATE dulces SET nombre='$nombre', precio='$precio' WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if($result) {
            echo "Producto actualizado exitosamente";
        } else {
            echo "Error al actualizar producto";
        }
    }
?>