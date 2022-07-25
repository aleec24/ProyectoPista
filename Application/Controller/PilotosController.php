<?php

    include "../Model/PilotosModel.php";

    function ConsultarPilotos()
    {       
        $listaPilotos = ConsultarPilotosModel();
        while($item = mysqli_fetch_array($listaPilotos))
        {   
            echo "<tr>";
            echo "<td>" . $item["pilotoID"] . "</td>";
            echo "<td>" . $item["puntos"] . "</td>";
            echo "<td>" . $item["victorias"] . "</td>";
            echo "<td>" . $item["podios"] . "</td>";
            echo "<td>" . $item["usuarioID"] . "</td>"; 
            echo "</tr>";
        } 

    }

?>

