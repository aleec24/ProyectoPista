<?php

    include "../Model/VehiculosModel.php";

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

?>
