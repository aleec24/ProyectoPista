<?php

    include "Conexion.php";

    function ConsultarPilotosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaCodigos = $instancia -> query("CALL ConsultarPilotos();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

?>