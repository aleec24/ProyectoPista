<?php

include "../Model/UsuariosModel.php";

function ConsultarUsuarios()
{
    $listaUsuarios = ConsultarUsuariosModel();
    while ($item = mysqli_fetch_array($listaUsuarios)) {
        echo "<tr>";
        echo "<td>" . $item["usuarioID"] . "</td>";
        echo "<td>" . $item["correo"] . "</td>";
        echo "<td>" . $item["nombre"] . "</td>";
        echo "<td>" . $item["apellido"] . "</td>";
        echo "<td>" . $item["edad"] . "</td>";
        echo "<td>" . $item["rolID"] . "</td>";
        echo '<td>
                    <a class="btn" style="color:white" href="ActualizarUsuario.php?q=' . $item["usuarioID"] . '">Actualizar</a>
                    <input type="button" class="btn" style="color:white" value="Eliminar" 
                    onclick="EliminarUsuario(' . $item["usuarioID"]. ')">
                  </td>';
            echo "</tr>";
        echo "</tr>";
    }
}

function ConsultarVehiculos()
    {       
        $listaVehiculos = ConsultarVehiculosModel();
        while($item = mysqli_fetch_array($listaVehiculos))
        {   
            echo "<tr>";
            echo "<td>" . $item["vehiculoID"] . "</td>";
            echo "<td>" . $item["modelo"] . "</td>"; 
            echo "</tr>";
        } 

    }

    function ConsultarPilotos()
    {       
        $listaPilotos = ConsultarPilotosModel();
        while($item = mysqli_fetch_array($listaPilotos))
        {   
            echo "<tr>";
            echo "<td>" . $item["usuarioID"] . "</td>";
            echo "<td>" . $item["nombre"] . "</td>";
            echo "<td>" . $item["apellido"] . "</td>";
            echo "<td>" . $item["edad"] . "</td>";
            echo "<td>" . $item["puntos"] . "</td>"; 
            echo "<td>" . $item["victorias"] . "</td>";
            echo "<td>" . $item["podios"] . "</td>";
            echo "</tr>";
        } 

    }
    
    function ConsultarPistas()
    {       
        $listaVehiculos = ConsultarPistasModel();
        while($item = mysqli_fetch_array($listaVehiculos))
        {   
            echo "<tr>";
            echo "<td>" . $item["pistaID"] . "</td>";
            echo "<td>" . $item["nombrePista"] . "</td>"; 
            echo "<td>" . $item["cantidadPilotos"] . "</td>";
            echo "<td>" . $item["recordVuelta"] . "</td>";
            echo "<td>" . $item["distanciaTotal"] . "</td>";
            echo "</tr>";
        } 

    }

    function ConsultarUsuario($usuarioID)
    {       
        $Usuario = ConsultarUsuarioModel($usuarioID);
        $item = mysqli_fetch_array($Usuario);
        return $item;
    }  

    if(isset($_POST['btnActualizar']))
    {
        $usuarioID = $_POST["txtUsuarioID"]; 
        $correo = $_POST["txtCorreo"]; 
        $contrasena = $_POST["txtContrasenna"]; 
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $edad = $_POST["txtEdad"];
        $rolID = $_POST["txtRol"];
        
        ActualizarUsuariosModel($usuarioID, $correo, $contrasena, $nombre, $apellido, $edad, $rolID);
        header("Location: ../View/Usuarios.php");
    }

    function ConsultarRoles()
    {       
        $listaRoles = ConsultarRolesModel();
        while($item = mysqli_fetch_array($listaRoles))
        {   
            echo "<option value=". $item["rolID"] .">" . $item["descripcionRol"] . "</option>";
        }
    }  


    
?>