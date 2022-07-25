<?php

include "../Model/UsuariosModel.php";

if (isset($_POST["btnRegistro"])) {

    $correo = $_POST["txtCorreoReg"];
    $Contrasenna = $_POST["txtContrasennaReg"];
    $Nombre = $_POST["txtNombre"];
    $Apellido = $_POST["txtApellido"];
    $Edad = rand(18, 70);
    $Rol = 2;

    RegistrarUsuariosModel($correo, $Contrasenna, $Nombre, $Apellido, $Edad, $Rol);
    header("Location: login.php");
}

?>