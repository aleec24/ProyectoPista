<?php

    include "Conexion.php";

    function ConsultarUsuariosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaCodigos = $instancia -> query("CALL ConsultarUsuarios();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

?>