<?php

    include "Conexion.php";

    function ConsultarVehiculosModel()
    {    
        $instancia = AbrirBaseDatos();
        $listaCodigos = $instancia -> query("CALL ConsultarVehiculos();");
        CerrarBaseDatos($instancia);
    
        return $listaCodigos;
    }

?>