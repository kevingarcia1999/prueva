<?php
    include('bd.php');

    $username = $_POST["nameUser"];
    $passUsers = $_POST["passwordUser"];

    $consulta = "SELECT * FROM `users` WHERE `nameUser` = '".$username."'";

    $resultConsulta = $conexion->query($consulta);
	$resultado = $resultConsulta->num_rows;

    if($resultado>0){
        $fila = $resultConsulta->fetch_assoc();
        $contracenaDB = $fila['passwordUser'];
        if(password_verify($passUsers,$contracenaDB))
        header("Location: inicio.php");
      else{
            echo "la contraceña es incorecta.<br>";
            echo '<a href="index.php">Regresar</a>';
          }
    }
    else{
    echo "El usuario es incorecxto o no existe.<br>";
    echo '<a href="index.php">Regresar</a>';
   }
?>