<?php include "componentes.php"; ?>
<?php include "../Controller/UsuariosController.php"; ?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pistas</title>
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
                        
                        <th scope="col">Nombre de la Pista</th>
                        <th scope="col">Cantidad de Pilotos</th>
                        <th scope="col">Mejor Vuelta</th>
                        <th scope="col">Distancia Total</th>
                    </tr>
                </thead>
               
                <tbody>
                    <?php ConsultarPistas(); ?>
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