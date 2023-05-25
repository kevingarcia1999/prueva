<?php
    include('bd.php');

    $usuario = $_POST["nameUser"];
    $contrasenna = $_POST["passwordUser"];
    $confContrasenna = $_POST["confPassUser"];
    $email = $_POST["email"];

    $hash = password_hash($contrasenna, PASSWORD_DEFAULT);

    

    if($contrasenna == $confContrasenna){
        $consulta = "INSERT INTO `users`(`nameUser`, `passwordUser`, `email`) VALUES ('".$usuario."','".$hash."','".$email."')";
        $conectar = mysqli_query($conexion, $consulta);
        if($conectar){
            header("Location: index.php");
        }
        else{
            echo "No fue posible introducir la información<br>";
            echo '<a href="registrarse.php">Regresar</a>';
        }
    }
    else{
        echo "Las contraseñas no coinciden<br>";
        echo '<a href="registrarse.php">Regresar</a>';
    }
?>