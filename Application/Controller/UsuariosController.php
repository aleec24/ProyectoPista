<?php

include "../Model/UsuariosModel.php";

function ConsultarUsuarios()
{
    $listaUsuarios = ConsultarUsuariosModel();
    while ($item = mysqli_fetch_array($listaUsuarios)) {
        echo "<tr>";
        echo "<td>" . $item["correo"] . "</td>";
        //echo "<td>" . $item["contrasena"] . "</td>";
        echo "<td>" . $item["nombre"] . "</td>";
        echo "<td>" . $item["apellido"] . "</td>";
        echo "<td>" . $item["edad"] . "</td>";
        echo "<td>" . $item["rolID"] . "</td>";
        echo "</tr>";
    }
}

?>