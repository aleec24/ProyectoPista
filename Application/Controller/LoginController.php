<?php

include '../Model/LoginModel.php';

if (isset($_POST["btnLogin"])) {
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $resultado = ValidarIngresoModel($correo, $contrasenna);

    if ($resultado->num_rows > 0) {
        session_start();

        $item = mysqli_fetch_array($resultado);
        $_SESSION["NombreUsuario"] = $item["Nombre"];
        $_SESSION["RolUsuario"] = $item["rolID"];

        header("Location: inicio2.php");
    }

}

if (isset($_POST["btnCerrarSesion"])) {
    session_start();

    session_destroy();
    header("Location: ../index.php");
}

?>