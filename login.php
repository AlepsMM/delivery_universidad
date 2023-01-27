<?php
    //conexion a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'tienda_dulces');
    //verificar si el usuario y contraseña son válidos
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            //iniciar sesión
            session_start();
            $_SESSION['username'] = $username;
            //redirigir al usuario a la página de compras
            header("Location: order.php");
        }else{
            echo "<script>alert('Usuario o contraseña incorrectos');window.location.href='index.php';</script>";
        }
    }
?>