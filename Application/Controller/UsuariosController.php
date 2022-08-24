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
        if($item["rolID"] == 2){
            echo '<td>
                    <a class="btn" style="color:white" href="ActualizarUsuario.php?q=' . $item["usuarioID"] . '">Actualizar Usuario</a>
                    
                    <input type="button" class="btn" style="color:white" value="Eliminar" onclick="EliminarUsuario(' . $item["usuarioID"]. ')">

                    <a class="btn" style="color:white" href="ActualizarPilotos.php?q=' . $item["usuarioID"] . '">Actualizar Piloto</a>
                  </td>';
            echo "</tr>";
        }else if($item["rolID"] == 3){
            echo '<td>
                    <a class="btn" style="color:white" href="ActualizarUsuario.php?q=' . $item["usuarioID"] . '">Actualizar Usuario</a>
                    
                    <input type="button" class="btn" style="color:white" value="Eliminar" onclick="EliminarUsuario(' . $item["usuarioID"]. ')">

                    <a class="btn" style="color:white" href="RegistroPilotos.php?q=' . $item["usuarioID"] . '">Crear Piloto</a>
                  </td>';
            echo "</tr>";
        }else{
            echo '<td>
                    <a class="btn" style="color:white" href="ActualizarUsuario.php?q=' . $item["usuarioID"] . '">Actualizar Usuario</a>

                  </td>';
            echo "</tr>";
        }
        
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

    function ConsultarUsuarioLewis()
    {       
        $Usuario = ConsultarUsuarioLewisModel();
        $item = mysqli_fetch_array($Usuario);

        echo '<div class="col-4">';
        echo '</div>';            
        echo '<div class="col-4">';                
        echo '<button type="button" class="btn btn-dark btn-lg btn-block">'. $item['nombreCompleto'] .'</button>';
        echo '<button type="button" class="btn btn-dark btn-lg btn-block">'. $item['edad'] .'</button>';
        echo '<button type="button" class="btn btn-dark btn-lg btn-block">'. $item['correo'] .'</button>';
        echo '</div>';
        echo '<div class="col-4">';       
        echo '</div>;';
            
    }
    
    

    if(isset($_POST['btnActualizar']))
    {
        $usuarioID = $_POST["txtUsuarioID"]; 
        $correo = $_POST["txtCorreo"]; 
        $contrasena = $_POST["txtContrasenna"]; 
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $edad = $_POST["txtEdad"];
        
        
        ActualizarUsuariosModel($usuarioID, $correo, $contrasena, $nombre, $apellido, $edad);
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

    if(isset($_POST['btnRegistrarUsuario']))
    {
        $correo = $_POST["txtCorreo"]; 
        $contrasena = $_POST["txtContrasenna"]; 
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $edad = $_POST["txtEdad"];
        $rolID = 3;
        
        RegistrarUsuariosModel($correo, $contrasena, $nombre, $apellido, $edad, $rolID);
        header("Location: ../View/Usuarios.php");
    }

    if(isset($_POST['EliminarAjax']))
    {
        $usuarioID = $_POST['usuarioID'];
        EliminarUsuariosModel($usuarioID);
    }

    function ConsultarInfoCarrera()
    {       
        $listaInfoCarrera = ConsultarInfoCarreraModel();
        while($item = mysqli_fetch_array($listaInfoCarrera))
        {   
            echo "<tr>";
            echo "<td>" . $item["posicionPiloto"] . "</td>";
            echo "<td>" . $item["nombre"] . "</td>";
            echo "<td>" . $item["modelo"] . "</td>";  
            echo "</tr>";
        } 

    }

    if(isset($_POST['btnRegistrarPiloto']))
    {
        $usuarioID = $_POST["txtUsuarioID"];
        $puntos = $_POST["txtPuntos"]; 
        $victorias = $_POST["txtVictorias"]; 
        $podios = $_POST["txtPodios"];
        
        
        RegistrarPilotosModel($usuarioID, $puntos, $victorias, $podios);
        header("Location: ../View/Pilotos.php");
    }

    function ConsultarPiloto($usuarioID)
    {       
        $Usuario = ConsultarPilotoModel($usuarioID);
        $item = mysqli_fetch_array($Usuario);
        return $item;
    }

    if(isset($_POST['btnActualizarPiloto']))
    {
        $usuarioID = $_POST["txtUsuarioID"];
        $puntos = $_POST["txtPuntos"]; 
        $victorias = $_POST["txtVictorias"]; 
        $podios = $_POST["txtPodios"];
        
        ActualizarPilotosModel($usuarioID, $puntos, $victorias, $podios);
        header("Location: ../View/Pilotos.php");
    }


    
?>