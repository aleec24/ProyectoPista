<?php

    include "../Model/CodigosModel.php";

    function ConsultarCodigos()
    {       
        $listaCodigos = ConsultarCodigosModel();
        while($item = mysqli_fetch_array($listaCodigos))
        {   
            echo "<tr>";
            //echo "<td>" . $item["Codigo"] . "</td>";
            echo '<td><input type="button" value="Calcular Precio" class="btn btn-default" onclick="CalcularPrecio(this)"></td>';
            echo "</tr>";
        }

    }

?>