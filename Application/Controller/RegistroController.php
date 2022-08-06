<?php

include "../Model/RegistroModel.php";

if (isset($_POST["btnRegistro"])) {

    $correo = $_POST["txtCorreoReg"];
    $Contrasenna = $_POST["txtContrasennaReg"];
    $Nombre = $_POST["txtNombre"];
    $Apellido = $_POST["txtApellido"];
    $Edad = rand(18, 70);
    $Rol = 2;

    RegistrarUsuariosModel($correo, $Contrasenna, $Nombre, $Apellido, $Edad, $Rol);
    echo "<script type='text/javascript'>alert('El registro fue exitoso! Por favor ingrese sus nuevas credenciales.');</script>";
}

?>