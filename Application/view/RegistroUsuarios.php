<?php include "componentes.php"; ?>
<?php include "../Controller/UsuariosController.php";

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

        <div id="page-content-wrapper" class="container">



            <br>
            <br>
            <br /><br />
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" style="color:white">Correo Electronico</label>
                        <input type="email" class="form-control" id="input" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" style="color:white">Contraseña</label>
                        <input type="password" class="form-control " id="input" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <label style="color:white">Nombre</label>
                    <input type="text" class="form-control" id="input" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label  style="color:white">Apellido</label>
                    <input type="text" class="form-control" id="input" placeholder="Apellido">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputAge" style="color:white">Edad</label>
                        <input type="text" class="form-control" id="input" placeholder="Edad">
                    </div>
                </div>
                <button type="submit" class="cta">Registrar Usuario</button>
           

            <br>
            <br>
            <br>


            <div class="col-3" style="color:white">
                Correo
                <input type="text" name="txtCorreo" class="form-control" Value="" required>
            </div>
            <div class="col-3" style="color:white">
                Contraseña
                <input type="text" name="txtContrasenna" class="form-control" Value="" required>
            </div>
            <div class="col-3" style="color:white">
                Nombre
                <input type="text" name="txtNombre" class="form-control" Value="" required>
            </div>




            <div class="col-3" style="color:white">
                Apellido
                <input type="text" name="txtApellido" class="form-control" Value="" required>
            </div>

            <div class="col-3" style="color:white">
                Edad
                <input type="text" name="txtEdad" class="form-control" Value="" required>
            </div>
            <div class="col-3">
                <br />
                <input type="submit" name="btnRegistrarUsuario" Value="Registrar" class="btn btn-info">
            </div>








        </div>





        <script type="text/javascript" src="../js/mobile.js"></script>
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/simple-sidebar.js"></script>
    </form>

</body>

</html>