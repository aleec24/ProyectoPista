<?php

include '../Model/LoginModel.php';
include_once '../view/componentes.php';

if (isset($_POST["btnLogin"])) {
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $resultado = ValidarIngresoModel($correo, $contrasenna);

    if ($resultado->num_rows > 0) {
        session_start();

        $item = mysqli_fetch_array($resultado);
        $_SESSION["NombreUsuario"] = $item["Nombre"];
        $_SESSION["RolUsuario"] = $item["rolID"];

        header("Location: inicio.php");
    }

}

if (isset($_POST["btnCerrarSesion"])) {
    session_start();

    session_destroy();
    header("Location: ../index.php");
}

if (isset($_POST["ResetearClave"])) {
    $correo = $_POST["email"];

    $resultado = ValidarUsuarioModel($correo);

    if ($resultado->num_rows > 0) {

        $pass = '';
        do {
            $pass = randomPassword(8);
        } while (!preg_match("/\W/", $pass));

        ActualizarContrasennaModel($correo, $pass);

        $body = 'Estimado(a) usuario, \n\n Se le informa que su contraseña ha sido reseteada correctamente. Su nueva contraseña es: ' . $pass;
        Notificar($correo, 'Nueva Contraseña', $body);
    }
}

function randomPassword($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*().,';
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}


?>