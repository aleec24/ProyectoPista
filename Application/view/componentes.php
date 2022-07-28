<?php

function MostrarHeader()
{
  echo '
  <nav class="navbar navbar-expand-lg">

  <div class="navbar">
  <div class= "logo">
  <h1> LOGO </h1>
  </div>
  
  <div class= "icon-bar">
    <a href="inicio.php"><i class="fa-solid fa-house"> </i>
      <div class="menu-items">
        Home
  </div>
  </a>
  <a href="Usuarios.php"><i class="fa-solid fa-users"></i>
      <div class="menu-items">
        Usuarios
  </div>
   
  </a>
  <a href="Pilotos.php"><i class="fa-solid fa-people-group"> </i>
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
  <a href="Vehiculos.php"><i class="fa-solid fa-car-rear"> </i>
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
  </div>
  </nav>
  ';
}



/* 
function MostrarHeader()

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
  ';
}



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

}
*/

