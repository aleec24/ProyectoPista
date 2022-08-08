<?php

function MostrarHeader()
{
  echo '
  <header>
            <a class="logo" href="inicio.php"><label class="logox">Racing</label></a>
            <nav>
                <ul class="nav__links">
                    <li class="fa-solid fa-house"><a href="inicio.php">
                    <div class="menu-items">
                        Home
                      </div>
                    </a>
                </li>
                    <li class="fa-solid fa-users"><a href="Usuarios.php">
                    <div class="menu-items">
                        Usuarios
                        </div>
                    </a>
                </li>
                    <li class="fa-solid fa-people-group"><a href="Pilotos.php">
                    <div class="menu-items">
                        Pilotos
                        </div>
                    </a>
                </li>
                    <li class="fa-solid fa-flag-checkered"><a href="Carreras.php">
                    <div class="menu-items">
                        Carreras
                        </div>
                    </a>
                </li>
                    <li class="fa-solid fa-road"><a href="Pistas.php">
                    <div class="menu-items">
                        Pistas
                        </div>
                    </a>
                </li>
                    <li class="fa-solid fa-car-rear"><a href="Vehiculos.php">
                    <div class="menu-items">
                        Vehiculos
                        </div>
                    </a>   
                </li>
                    <li class="fa-solid fa-user"><a href="Cuenta.php">
                    <div class="menu-items">
                        Mi cuenta
                        </div>
                    </a>
                    
                </li>
                </ul>
            </nav>
            <a class="cta" href="login.php">Log out</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="inicio.php">Home</a>
                <a href="Usuarios.php">Usuarios</a>
                <a href="Pilotos.php">Pilotos</a>
                <a href="Carreras.php">Carreras</a>
                <a href="Pistas.php">Pistas</a>
                <a href="Vehiculos.php">Vehiculos</a>
                <a href="Cuenta.php">Mi cuenta</a>
            </div>
        </div>
  ';
}

function Notificar($destinatario, $asunto, $cuerpo)
{
  require '../PHPMailer/src/PHPMailer.php';
  require '../PHPMailer/src/SMTP.php';

  $mail = new PHPMailer();
  $mail->CharSet = 'UTF-8';

  $mail->IsSMTP();
  $mail->Host = 'smtp.office365.com'; // smtp.gmail.com     
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587; // 465 // 25                               
  $mail->SMTPAuth = true;
  $mail->Username = 'claseProgra3.5@outlook.com';
  $mail->Password = 'progra3.5';
  $mail->SetFrom('claseProgra3.5@outlook.com', "PROFE");
  $mail->Subject = $asunto;
  $mail->MsgHTML($cuerpo);
  $mail->AddAddress($destinatario, 'USER');
  $mail->send();
}

/*  function MostrarHeader()
 {
 echo
 '
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
 
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
 <li class="nav-item active">
 
 <form action="" method="POST">
 <input type="submit" value="Cerrar Sesión" name="btnCerrarSesion">
 <form>
 
 </li>
 </ul>
 </div>
 </nav>
 
 
 <div class= "logo">
 <h1> LOGO </h1>
 </div>
 
 <div class= "icon-bar">
 <a href="#"><i class="fa-solid fa-house"> </i>
 <div class="menu-items">
 Home
 </div>
 </a>
 <a href="#"><i class="fa-solid fa-users"></i>
 <div class="menu-items">
 Usuarios
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-people-group"> </i>
 <div class="menu-items">
 Pilotos
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-flag-checkered"></i>
 <div class="menu-items">
 Carreras
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-road"></i> </i>
 <div class="menu-items">
 Pistas
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-car-rear"> </i>
 <div class="menu-items">
 Vehiculos
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-user"></i>
 <div class="menu-items">
 Mi cuenta
 </div>
 
 </a>
 <a href="#"><i class="fa-solid fa-right-from-bracket"></i>
 <div class="menu-items">
 
 </div>
 
 </a>
 
 </nav>
 '; }
 function MostrarHeader()
 {    
 echo '
 <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
 <button class="btn btn-primary" id="menu-toggle">Menu</button>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
 <li class="nav-item active">
 
 <form action="" method="POST">
 <input type="submit" value="Cerrar Sesión" name="btnCerrarSesion">
 <form>
 
 </li>
 </ul>
 </div>
 </nav>
 ';
 } */