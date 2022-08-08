<?php include "componentes.php"; ?>
<?php include "../Controller/PilotosController.php"; ?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pilotos</title>
    <link rel="icon" href="../img/logo.png">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/tablas.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/b297c62494.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

</head>

<body>
    <?php MostrarHeader(); ?>
    <br>
    <br>

    <div id="page-content-wrapper">



        <div class="container-fluid">

            <table id="tUsuarios" class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID Piloto</th>
                        <th scope="col">Puntos</th>
                        <th scope="col">Victorias</th>
                        <th scope="col">Podios</th>
                        <th scope="col">ID Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ConsultarPilotos(); ?>
                </tbody>
            </table>
            

        </div>

       

    </div>





    <script type="text/javascript" src="../js/mobile.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/simple-sidebar.js"></script>
    <script type="text/javascript" src="../js/mobile.js"></script>


</body>

</html>