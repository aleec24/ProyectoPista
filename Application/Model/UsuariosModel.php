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
        $listaCodigos = $instancia -> query("CALL ConsultarPilotos();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

    function ConsultarVehiculosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaCodigos = $instancia -> query("CALL ConsultarVehiculos();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

    function ConsultarPistasModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaCodigos = $instancia -> query("CALL ConsultarPistas();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

    function ActualizarUsuariosModel($usuarioID, $correo, $contrasena, $nombre, $apellido, $edad, $rolID)
    {    
        $instancia = AbrirBaseDatos();
        $instancia -> query("CALL ActualizarUsuario($usuarioID, '$correo', '$contrasena', '$nombre', '$apellido', $edad, $rolID);");
        CerrarBaseDatos($instancia);
    }

    function ConsultarUsuarioModel($Cedula)
    {    
        $instancia = AbrirBaseDatos();
        $Usuario = $instancia -> query("CALL ConsultarUsuario('$Cedula');");
        CerrarBaseDatos($instancia);
        return $Usuario;
    }

    function ConsultarRolesModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaRoles = $instancia -> query("CALL ConsultarRoles();");
        CerrarBaseDatos($instancia);
        return $listaRoles;
    }
