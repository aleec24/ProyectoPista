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
    <link href="../css/login-container.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex" id="wrapper">

        <div id="page-content-wrapper">

            <div class="d-flex justify-content-center align-items-center mt-5">


                <div class="card">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item text-center">
                            <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">Registrate!</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <div class="form px-4 pt-5">

                                <input type="text" name="" class="form-control" placeholder="Usuario">

                                <input type="text" name="" class="form-control" placeholder="Contraseña">
                                <button class="btn btn-dark btn-block">Entrar</button>
                                <label id="lblForgotPswd">¿Has olvidado tu contraseña?</label>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">


                            <div class="form px-4">

                                <input type="text" name="" class="form-control" placeholder="Nombre Completo">

                                <input type="text" name="" class="form-control" placeholder="Usuario">

                                <input type="text" name="" class="form-control" placeholder="Contraseña">

                                <button class="btn btn-dark btn-block">Registrarse</button>

                            </div>



                        </div>

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