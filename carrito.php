<?php
session_start();
    if(isset($_POST['comprar'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
        $query = "SELECT * FROM dulces";
        $result = mysqli_query($conn, $query);
        $total = 0;
        $detalle_compra = "";
        while($row = mysqli_fetch_assoc($result)){
            $nombre = $row['nombre'];
            $cantidad = $_POST[$nombre];
            $precio = $row['precio'];
            if($cantidad > 0) {
                $subtotal = $cantidad * $precio;
                $total += $subtotal;
                $detalle_compra .= $nombre . " - Cantidad: " . $cantidad . " - Subtotal: $" . $subtotal . "\n";
            }
        }
        $username = $_SESSION['username']; //Asumiendo que el usuario se ha registrado y iniciado sesión antes de realizar la compra
        $query = "INSERT INTO compras_productos (username, detalle, total, fecha) VALUES ('$username', '$detalle_compra', '$total', now())";
        mysqli_query($conn, $query);
        echo "<script>alert('Compra realizada con éxito. Total: $" . $total . "');window.location.href='order.php';</script>";
    }
?>
