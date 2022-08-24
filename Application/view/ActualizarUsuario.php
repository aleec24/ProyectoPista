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
        <br>
        <br>

        <div id="page-content-wrapper" class="container">

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th style="text-align:center;">Actualización de Usuarios</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label style="color:white">ID de Usuario</label>
                                    <input type="text" class="form-control" name="txtUsuarioID" Value="<?php echo $Usuario["usuarioID"]; ?>" required readonly="true">
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" style="color:white">Correo Electronico</label>
                                    <input type="email" class="form-control" name="txtCorreo" Value="<?php echo $Usuario["correo"]; ?>" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputPassword4" style="color:white">Contraseña</label>
                                    <input type="password" class="form-control " name="txtContrasenna" Value="<?php echo $Usuario["contrasena"]; ?>" required>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label style="color:white">Nombre</label>
                                    <input type="text" class="form-control" name="txtNombre" Value="<?php echo $Usuario["nombre"]; ?>" required>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label style="color:white">Apellido</label>
                                    <input type="text" class="form-control" name="txtApellido" Value="<?php echo $Usuario["apellido"]; ?>" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputAge" style="color:white">Edad</label>
                                    <input type="number" class="form-control" name="txtEdad" min="18" max="70" placeholder="Edad" Value="<?php echo $Usuario["edad"]; ?>" required>
                                </div>
                            </div>
                        </td>
                    </tr>
                </thead>
            </table>
            <input type="submit" name="btnActualizar" class="cta" Value="Actualizar Usuario">
            <input type="button" class="cta" onClick="location.href='Usuarios.php'" Value="Cancelar">


        </div>

        <script type="text/javascript" src="../js/mobile.js"></script>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
    </form>

</body>

</html>