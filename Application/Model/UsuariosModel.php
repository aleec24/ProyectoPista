<?php

include_once "Conexion.php";

function ConsultarUsuariosModel()
{
    $instancia = AbrirBaseDatos();
    $listaUsuarios = $instancia->query("CALL ConsultarUsuarios();");
    CerrarBaseDatos($instancia);

    return $listaUsuarios;
}