<?php include "componentes.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entrada</title>
    <link rel="icon" href="../img/logo.png">
    <link href="../css/menu.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/b297c62494.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../css/entrada.css">
</head>
<body>
    
<div class="container-fluid text-center"  style="background: black">
        <div class="row m-0">
            <div class="col align-self-center emergencias">INFORMACIÓN</div>
            <div class="col align-self-center numero"><a href="https://wa.me/50683910129" target="_blank">Contactános: +506 8391-0129</a></div>
        </div>
    </div>

	<div class="contenedor">
		<main class="contenido-principal">
			<img src="../img/carro11.jpg" alt="Lo mejor de las carreras" class="contenido-principal__imagen">
			<div class="contenido-principal__contenedor">
				<h1 class="contenido-principal__titulo">Lo mejor de las carreras</h1>
				<p class="contenido-principal__resumen">
                Nuestro personal está compuesto por personas experimentadas que entienden las necesidades de los corredores, patrocinadores y organizadores de eventos. Nosotros usamos esta ventaja para hacer un evento lo más agradable posible para todos los involucrados – desde los corredores, a los espectadores y patrocinadores.				</p>
                <a class="btn btn-primary" href="../view/login.php" role="button">Entra aquí para más</a>
                          </div>
		</main>

		<div class="carousel">
			<div class="carousel__contenedor">
				<button aria-label="Anterior" class="carousel__anterior">
					<i class="fas fa-chevron-left"></i>
				</button>

				<div class="carousel__lista">
					<div class="carousel__elemento">
						<img src="../img/carro1.jpg" alt="Rock and Roll Hall of Fame">
						<p>RPD Racing</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro9.jpg" alt="Constitution Square - Tower I">
						<p>En arena</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro3.jpg"alt="Empire State Building">
						<p>Bajo lluvia</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro4.jpg" alt="Harmony Tower">
						<p>El mejor ganador</p>
					</div>
	
					<div class="carousel__elemento">
						<img src="../img/carro5.jpg"alt="Empire State Building">
						<p>Hankook Racing</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro6.jpg" alt="Harmony Tower">
						<p>Magna Racing</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro7.jpg"alt="Empire State Building">
						<p>Falken en la pista</p>
					</div>
					<div class="carousel__elemento">
						<img src="../img/carro8.jpg" alt="Harmony Tower">
						<p>Prosis y Martins Racing</p>
					</div>
				</div>

				<button aria-label="Siguiente" class="carousel__siguiente">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>

			<div role="tablist" class="carousel__indicadores"></div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="../js/app.js"></script>
</body>
</html>