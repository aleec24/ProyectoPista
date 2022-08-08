<?php

include "../Model/RegistroModel.php";

if (isset($_POST["btnRegistro"])) {

    $correo = $_POST["txtCorreoReg"];
    $Contrasenna = $_POST["txtContrasennaReg"];
    $Nombre = $_POST["txtNombre"];
    $Apellido = $_POST["txtApellido"];
    $Edad = rand(18, 35);
    $Rol = 2;

    RegistrarUsuariosModel($correo, $Contrasenna, $Nombre, $Apellido, $Edad, $Rol);

    echo '
    <script type="module">

    Swal.fire({
        position: "center",
        icon: "success",
        iconColor:"#fff",
        title: "¡Registro satisfactorio! Por favor ingrese sus nuevas credenciales.",
        showConfirmButton: false,
        timer: 2000,
        color: "#fff",
        background:"#252525"
      })

    </script>';

}

?>