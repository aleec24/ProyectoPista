<?php include "componentes.php"; ?>
<?php include "../Controller/UsuariosController.php";

$ID = $_GET["q"];
$Usuario = ConsultarUsuario($ID);

?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Usuarios</title>
    <link rel="icon" href="../img/logo.png">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/tablas.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/b297c62494.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

</head>

<body>
    <?php MostrarHeader(); ?>
    <br>
    <form action="" method="POST">

        <div id="page-content-wrapper">



            <br>
            <br>
            <br /><br />

            <div class="row">

                <div class="col-1">
                </div>
                <div class="col-3">
                    ID Usuario
                    <input type="text" name="txtUsuarioID" class="form-control" Value="<?php echo $Usuario["usuarioID"]; ?>" required readonly="true">
                </div>
                <div class="col-3">
                    Correo
                    <input type="text" name="txtCorreo" class="form-control" Value="<?php echo $Usuario["correo"]; ?>" required>
                </div>
                <div class="col-3">
                    Contraseña
                    <input type="text" name="txtContrasenna" class="form-control" Value="<?php echo $Usuario["contrasena"]; ?>" required>
                </div>


            </div>

            <br />

            <div class="row">

                <div class="col-1">
                </div>
                <div class="col-3">
                    Nombre
                    <input type="text" name="txtNombre" class="form-control" Value="<?php echo $Usuario["nombre"]; ?>" required>
                </div>

                <div class="col-3">
                    Apellido
                    <input type="text" name="txtApellido" class="form-control" Value="<?php echo $Usuario["apellido"]; ?>" required>
                </div>

                <div class="col-3">
                    Edad
                    <input type="text" name="txtEdad" class="form-control" Value="<?php echo $Usuario["edad"]; ?>" required>
                </div>

            </div>

            <div class="row">

                <div class="col-3">
                    <label>Rol</label>
                    <select name="txtRol" class="form-control" required>
                        <?php
                        ConsultarRoles($Usuario["rolID"]);
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <br />
                    <input type="submit" name="btnActualizar" Value="Actualizar" class="btn btn-info">
                </div>

            </div>




        </div>





        <script type="text/javascript" src="../js/mobile.js"></script>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
    </form>

</body>

</html>