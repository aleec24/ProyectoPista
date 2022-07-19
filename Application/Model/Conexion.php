<?php

    function AbrirBaseDatos()
    {
        $server = "localhost:3307";
        $user = "root";
        $password = "";
        $database = "practica_mn";

        return mysqli_connect($server, $user, $password, $database);
    }

    function CerrarBaseDatos($instancia)
    {
        mysqli_close($instancia);
    }

?>