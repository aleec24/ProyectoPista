  <!-- incluir un bloque de codigo de otro archivo en php-->
  <?php include "componentes.php"; ?>

  <?php include "../Controller/UsuariosController.php"; ?>
  <?php include "../Controller/LoginController.php"; ?>

  <!DOCTYPE html>
  <html lang="en">


  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Inicio</title>
      <link rel="icon" href="../img/logo.png">
      <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/styles.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
      <link href="../css/stop-watch.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/b297c62494.js" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

  </head>

  <body>
      <?php MostrarHeader(); ?>
      <br>

      <div id="page-content-wrapper">

          <div class="container-fluid">

              <div class="row">

                  <div class="col-2">

                  </div>

                  <div class="col-2">

                      <div class="controls">
                          <button id="reset"><i class="fa-solid fa-stop"></i></button>
                      </div>

                  </div>


                  <div class="col-4">

                      <div class="watch">

                          <br>

                          <div class="time">
                              00:00:00
                          </div>

                          <div class="laps">
                                Mejor Vuelta:01:43
                                Vueltas 30/72
                          </div>

                          <br>

                      </div>
                  </div>

                  
                  <div class="col-3">

                      <div class="controls">
                        
                          <button id="stop"><i class="fa-solid fa-pause"></i></i></button>
                          <button id="start"><i class="fa-solid fa-play"></i></button>

                      </div>

                  </div>

                  <div class="col-1">

                  </div>

              </div>

          </div>

      </div>


      <script type="text/javascript" src="../js/mobile.js"></script>
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../js/cerrar-sesion.js"></script>
      <script src="../js/stop-watch.js"></script>


  </body>

  </html>