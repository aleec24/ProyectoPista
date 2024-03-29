<?php

include_once "Conexion.php";

function ConsultarUsuariosModel()
{
    $instancia = AbrirBaseDatos();
    $listaUsuarios = $instancia->query("CALL ConsultarUsuarios();");
    CerrarBaseDatos($instancia);

    return $listaUsuarios;
}

function ConsultarPilotosModel()
{
    $instancia = AbrirBaseDatos();
    $listaCodigos = $instancia->query("CALL ConsultarPilotos();");
    CerrarBaseDatos($instancia);

    return $listaCodigos;
}

function ConsultarVehiculosModel()
{
    $instancia = AbrirBaseDatos();
    $listaCodigos = $instancia->query("CALL ConsultarVehiculos();");
    CerrarBaseDatos($instancia);

    return $listaCodigos;
}

function ConsultarPistasModel()
{
    $instancia = AbrirBaseDatos();
    $listaCodigos = $instancia->query("CALL ConsultarPistas();");
    CerrarBaseDatos($instancia);

    return $listaCodigos;
}

function ActualizarUsuariosModel($usuarioID, $correo, $contrasena, $nombre, $apellido, $edad)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL ActualizarUsuario($usuarioID, '$correo', '$contrasena', '$nombre', '$apellido', $edad);");
    CerrarBaseDatos($instancia);
}

function ConsultarUsuarioModel($usuarioID)
{
    $instancia = AbrirBaseDatos();
    $Usuario = $instancia->query("CALL ConsultarUsuario('$usuarioID');");
    CerrarBaseDatos($instancia);
    return $Usuario;
}

function ConsultarUsuarioLewisModel()
{
    $instancia = AbrirBaseDatos();
    $Usuario = $instancia->query("CALL ConsultarUsuarioLewis();");
    CerrarBaseDatos($instancia);
    return $Usuario;
}

function ConsultarRolesModel()
{
    $instancia = AbrirBaseDatos();
    $listaRoles = $instancia->query("CALL ConsultarRoles();");
    CerrarBaseDatos($instancia);
    return $listaRoles;
}

function RegistrarUsuariosModel($correo, $contrasena, $nombre, $apellido, $edad, $rolID)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL RegistrarUsuarios('$correo', '$contrasena', '$nombre', '$apellido', $edad, $rolID);");
    CerrarBaseDatos($instancia);
}

function EliminarUsuariosModel($usuarioID)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL EliminarUsuario('$usuarioID');");
    CerrarBaseDatos($instancia);
}

function ConsultarInfoCarreraModel()
{
    $instancia = AbrirBaseDatos();
    $listaInfoCarrera = $instancia->query("CALL ConsultarInfoCarrera();");
    CerrarBaseDatos($instancia);

    return $listaInfoCarrera;
}

function RegistrarPilotosModel($usuarioID, $puntos, $victorias, $podios)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL RegistrarPilotos($usuarioID, $puntos, $victorias, $podios);");
    CerrarBaseDatos($instancia);
}

function ConsultarPilotoModel($usuarioID)
{
    $instancia = AbrirBaseDatos();
    $Usuario = $instancia->query("CALL ConsultarPiloto('$usuarioID');");
    CerrarBaseDatos($instancia);
    return $Usuario;
}

function ActualizarPilotosModel($usuarioID, $puntos, $victorias, $podios)
{
    $instancia = AbrirBaseDatos();
    $instancia->query("CALL ActualizaPiloto($usuarioID, $puntos, $victorias, $podios);");
    CerrarBaseDatos($instancia);
}
