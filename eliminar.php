<?php
    if(isset($_POST['id'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
        $id = $_POST['id'];
        $query = "DELETE FROM dulces WHERE id = $id";
        mysqli_query($conn, $query);
        header("Location: eliminar_productos.php");
    }
?>
