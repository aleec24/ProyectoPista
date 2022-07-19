<?php include "componentes.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio de Sesión</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid" style="margin-top:100px;">

                <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-2">
                        <br>
                        <label><b>Usuario:</b></label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="txtUsuario" name="txtUsuario" value="" placeholder="Ingrese su usuario."
                            onblur="LlamarServicioApi_AJAX();">
                    </div>
                    <div class="col-3">
                    </div>
                </div>

                <div class="row" id="divContrasenna">
                    <div class="col-3">
                    </div>
                    <div class="col-2">
                        <br>
                        <label><b>Contraseña:</b></label>
                    </div>
                    <div class="col-4">
                        <input type="password" id="txtContrasenna" name="txtContrasenna" value="">
                    </div>
                    <div class="col-3">
                    </div>
                </div>
                <br><br>

                <div class="row">
                    <div class="col-5">
                    </div>
                    <div class="col-4">
                        <input type="submit" id="btnLogin" name="btnLogin" value="Iniciar Sesión" class="btnLogin" />
                    </div>
                    <div class="col-3">
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>


</body>

</html>