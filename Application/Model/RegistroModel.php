<?php

include_once "Conexion.php";

function RegistrarUsuariosModel($Correo, $Contrasenna, $Nombre, $Apellido, $Edad, $Rol)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL RegistroUsuario('$Correo', '$Contrasenna', '$Nombre', '$Apellido','$Edad', $Rol);");
    CerrarBaseDatos($instancia);
}

?>