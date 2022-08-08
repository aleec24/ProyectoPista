<?php
include_once '../Controller/LoginController.php';
include_once '../Controller/RegistroController.php';
?>

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

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.26/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.26/sweetalert2.min.js"></script>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <div id="page-content-wrapper">

            <div class="d-flex justify-content-center align-items-center mt-5">


                <div class="card">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item text-center">
                            <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">¡Regístrate!</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <form action="" method="POST">

                                <div class="form px-4 pt-5">

                                    <input type="email" name="txtCorreo" class="form-control" placeholder="Correo"
                                        title="Correo Registrado." required>

                                    <input type="password" name="txtContrasenna" class="form-control"
                                        placeholder="Contraseña" title="Contraseña del Usuario." required>

                                    <button type="submit" id="btnLogin" name="btnLogin"
                                        class="btn btn-dark btn-block">Entrar</button>

                                    <a id="ForgotPswd" name="ForgotPswd" onclick="OlvidoClave()"><br>
                                        ¿Has olvidado tu contraseña?
                                    </a>

                                </div>

                            </form>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">

                            <form action="" method="POST">

                                <div class="form px-4">

                                    <input type="text" name="txtNombre" class="form-control" placeholder="Nombre"
                                        pattern="[A-Za-z]{3,20}"
                                        title="Por favor introduzca solo caracteres del alfabeto." required>

                                    <input type="text" name="txtApellido" inputmode="text" class="form-control"
                                        placeholder="Apellido" pattern="[A-Za-z]{3,20}"
                                        title="Por favor introduzca solo caracteres del alfabeto." required>

                                    <input type="email" name="txtCorreoReg" class="form-control" placeholder="Correo"
                                        required>

                                    <input type="password" id="txtContrasennaReg" name="txtContrasennaReg"
                                        class="form-control" placeholder="Contraseña" minlength="8" maxlength="20"
                                        pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])\S{8,20}"
                                        title="Debe contener al menos 8 caracteres, una mayúscula, un caracter especial y un número."
                                        required>

                                    <button type="submit" id="btnRegistro" name="btnRegistro"
                                        class="btn btn-dark btn-block">Registrarse</button>

                                </div>
                        </div>

                        </form>

                    </div>




                </div>


            </div>
        </div>

    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/forgotPassword.js"></script>

</body>

</html>