  <!-- incluir un bloque de codigo de otro archivo en php-->
  <?php include "componentes.php"; ?>
  <?php include "../Controller/UsuariosController.php"; ?>

  <!DOCTYPE html>
  <html lang="en">

  <!-- PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA PRUEBA-->

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Start Bootstrap Template</title>
      <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/simple-sidebar.css" rel="stylesheet">

  </head>

  <body style="background-color: WHITE;">
      <!-- Se cambio el color de fondo a blanco -->

      <div class="d-flex" id="wrapper">

          <div id="page-content-wrapper">

              <?php MostrarHeader(); ?>

              <div class="container-fluid">

                  <div class="row">
                      <div class="col-12">

                          <table id="tUsuarios" class="table table-hover">
                              <thead>
                                  <tr>
                                      <th>Correo</th>
                                      <th>Contraseña</th>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Edad</th>
                                      <th>RolID</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php ConsultarUsuarios(); ?>
                              </tbody>
                          </table>
                      </div>
                  </div>

              </div>
          </div>

      </div>

      <div class="d-flex" id="wrapper">
          <div id="page-content-wrapper">

              <div class="container-fluid" style="margin-top:100px;">


              </div>

          </div>
      </div>

      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../js/simple-sidebar.js"></script>


  </body>

  </html>