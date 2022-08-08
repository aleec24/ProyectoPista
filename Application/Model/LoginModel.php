<?php

include_once "Conexion.php";

function ValidarIngresoModel($correo, $contrasenna)
{
    $instancia = AbrirBaseDatos();
    $usuario = $instancia->query("CALL ValidarLogin('$correo', '$contrasenna');");
    CerrarBaseDatos($instancia);

    return $usuario;
}

function ValidarUsuarioModel($correo)
{
    $instancia = AbrirBaseDatos();
    $usuario = $instancia->query("CALL ValidarUsuario('$correo');");
    CerrarBaseDatos($instancia);

    return $usuario;
}

function ActualizarContrasennaModel($correo, $contrasenna)
{
    $instancia = AbrirBaseDatos();
    $usuario = $instancia->query("CALL ActualizarContrasenna('$correo','$contrasenna');");
    CerrarBaseDatos($instancia);

    return $usuario;
}

?>