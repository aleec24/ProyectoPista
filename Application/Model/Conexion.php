<?php

    function AbrirBaseDatos()
    {
        $server = "localhost:3307";
        $user = "root";
        $password = "";
        $database = "pistacarreras";

        return mysqli_connect($server, $user, $password, $database);
    }

    function CerrarBaseDatos($instancia)
    {
        mysqli_close($instancia);
    }

?>