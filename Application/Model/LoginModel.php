<?php

include "Conexion.php";

function ValidarIngresoModel($correo, $contrasenna)
{
    $instancia = AbrirBaseDatos();
    $usuario = $instancia->query("CALL ValidarLogin('$correo', '$contrasenna');");
    CerrarBaseDatos($instancia);

    return $usuario;
}

?>