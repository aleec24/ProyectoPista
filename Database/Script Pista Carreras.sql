create database PistaCarreras;

use PistaCarreras;

DROP DATABASE PistaCarreras;

create table Rol(
	rolID int auto_increment NOT NULL,
    descripcionRol varchar(25) NOT NULL,
    primary key (rolID)
);


create table Usuario (
	usuarioID int auto_increment NOT NULL,
    correo varchar(25) NOT NULL,
    contrasena varchar(25) NOT NULL,
    nombre varchar(25) NOT NULL,
    apellido varchar(25) NOT NULL,
    edad int NOT NULL,
    rolID int NOT NULL,
    
    primary key (usuarioID),
    foreign key (rolID) references Rol(rolID)
); 


create table Vehiculo(
	vehiculoID int auto_increment NOT NULL,
    modelo varchar(25) NOT NULL,
    
    primary key (vehiculoID)
);


create table Piloto(
	pilotoID int auto_increment NOT NULL,
    puntos int,
    victorias int,
    podios int,
    usuarioID int NOT NULL,    
    
    primary key (pilotoID),
    foreign key (usuarioID) references Usuario(usuarioID)
);


create table Pista(
	pistaID int auto_increment NOT NULL,
    nombrePista varchar(500) NOT NULL,
    cantidadPilotos int NOT NULL,
    recordVuelta time NOT NULL,
    distanciaTotal float NOT NULL,
    
    primary key (pistaID)
);


create table Carrera(
	carreraID int auto_increment NOT NULL,
    fecha date NOT NULL,
    hora time NOT NULL,
    cantidadVueltas int NOT NULL,
    pistaID int,
    
    primary key (carreraID),
    
    foreign key (pistaID) references Pista(pistaID)
);


/*Se linkea un piloto, con una carrera en especifico y se brinda toda la informacion de ese dia*/

create table detalleCarerraPilotos(
	carreraID int NOT NULL,
    posicionPiloto int NOT NULL,
    pilotoID int NOT NULL,
    vehiculoID int NOT NULL,
    
    primary key(carreraID,posicionPiloto),
    foreign key (carreraID) references Carrera(carreraID),
    foreign key (pilotoID) references Piloto(pilotoID),
    foreign key (vehiculoID) references Vehiculo(vehiculoID)
);

create table BitacoraErrores(
	errorID int NOT NULL,
    descripcion varchar(5000),
    rolID int not NULL,
    primary key (errorID),
    foreign key (rolID) references Rol(rolID)
); 


insert into Rol(descripcionRol)
values("ADMIN"),("PILOTO"),("USUARIO");


insert into Usuario(correo,contrasena,nombre,apellido,edad,rolID)
values("admin@mail.com","0000","Admin","Pista",50,1),
("lhamilton@mail.com","1234","Lewis","Hamilton",37,2),
("mverstappen@mail.com","1234","Max","Verstappen",24,2),
("sperez@mail.com","1234","Sergio","Pérez",32,3),
("cleclerc@mail.com","1234","Charles","Leclerc",24,3),
("clark@mail.com","1234","Clark","Kent",42,2),
("bruce@mail.com","1234","Bruce","Wayne",40,2),
("barry@mail.com","1234","Barry","Allen",22,2),
("oliver@mail.com","1234","Oliver","Queen",45,3),
("howard@mail.com","1234","Howard","Hamlin",50,3);

insert into Vehiculo(modelo)
values("Mercedes W13"),
("Red Bull RB18"),
("McLaren MCL34"),
("Aston Martin AMR22"),
("Alfa Romeo C42"),
("Alpine A522"),
("Williams FW44"),
("AlphaTauri AT03"),
("Ferrari F1-75");

insert into Piloto(puntos,victorias,podios,usuarioID)
values(109,23,186,2),
(208,26,68,3),
(151,3,21,4),
(170,5,18,5),
(1,1,10,6),
(344,35,19,7),
(151,3,9,8),
(133,1,12,9),
(180,20,15,10),
(43,14,10,6),
(163,321,58,6),
(23,21,40,6),
(3,1,1,6),
(13,56,5,6);


insert into Pista(nombrePista,cantidadPilotos,recordVuelta,distanciaTotal)
values("Circuito de Barcelona-Catalunya",20,"00:1:18.149","4.675"),
("Circuito Internacional de Bahrain",20,"00:1:31.447",5.412),
("Circuito Albert Park",20,"00:01:20.260",5.278);


insert into Carrera(fecha,hora,cantidadVueltas,pistaID)
values("2022-06-06","00:10:00.000",73,1);

insert into detalleCarerraPilotos(carreraID,posicionPiloto,pilotoID,vehiculoID)
values(1,1,1,2);

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuarios`()
BEGIN

	SELECT * FROM Usuario;
	

END$$
DELIMITER ;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPilotos`()
BEGIN

	SELECT U.usuarioID, U.nombre, U.apellido, U.edad, P.puntos, P.victorias, P.podios
    FROM usuario U
    INNER JOIN piloto P ON U.usuarioID = P.UsuarioID
    WHERE U.rolID = 2;

END$$
DELIMITER ;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarVehiculos`()
BEGIN

	SELECT * FROM VEHICULO;
	
END$$
DELIMITER ;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarPistas`()
BEGIN

	SELECT * FROM pista;

END$$
DELIMITER ;


/*Creacion Procedimiento Inicio Sesion*/

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarLogin`(IN `pCorreo` VARCHAR(25), IN `pContrasenna` VARCHAR(25))
BEGIN

	SELECT	usuarioID, Correo, Nombre, U.rolID, R.descripcionRol
    FROM 	usuario U
    INNER JOIN rol R ON U.rolID = R.rolID
    WHERE 	U.correo = pCorreo 
		AND	U.contrasena = pContrasenna;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistroUsuario`(IN `pCorreo` VARCHAR(25), IN `pContrasenna` VARCHAR(25), IN `pNombre` VARCHAR(25), IN `pApellido` VARCHAR(25), IN `pEdad` INT,  IN `pRol` INT)
BEGIN

INSERT INTO usuarios (correo, contrasena, nombre, apellido, edad, rolID)
VALUES(pCorreo, pContrasenna, pNombre, pApellido, pEdad, pRol);

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarUsuario`(IN `pCorreo` VARCHAR(25))
BEGIN

	SELECT	usuarioID, Correo, Nombre
    FROM 	usuario U
    WHERE 	U.correo = pCorreo;

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarContrasenna`(IN `pCorreo` VARCHAR(25), IN `pContrasenna` VARCHAR(25))
BEGIN

	UPDATE	usuario U
    SET u.contrasena = pContrasenna
    WHERE 	U.correo = pCorreo;

END$$
DELIMITER ;


DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsuario`(IN `pusuarioID` INT, IN `pcorreo` VARCHAR(25), IN `pcontrasena` VARCHAR(20), IN pnombre VARCHAR(20), IN papellido VARCHAR(20), IN pedad INT, IN prolID INT)
BEGIN

	UPDATE usuario
	SET correo = pcorreo,
		contrasena = pcontrasena,
		nombre = pnombre,
        apellido = papellido,
        edad = pedad,
		rolID = prolID
	WHERE usuarioID = pusuarioID;

END$$
DELIMITER ;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuario` (IN `pusuarioID` INT)   BEGIN

	SELECT	usuarioID, correo, contrasena, nombre, apellido, edad, rolID
    FROM 	usuario
    WHERE 	usuarioID = pusuarioID;

END$$

DELIMITER ;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRoles` ()   BEGIN

SELECT * FROM rol;

END$$

DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuarios`(IN `pcorreo` VARCHAR(25), IN `pcontrasena` VARCHAR(20), IN pnombre VARCHAR(20), IN papellido VARCHAR(20), IN pedad INT, IN prolID INT)
BEGIN
	
    INSERT INTO usuario (correo, contrasena, nombre, apellido, edad, rolID)
    VALUES (pcorreo, pcontrasena, pnombre, papellido, pedad, prolID);
    

END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarUsuario`(IN `pusuarioID` INT)
BEGIN
	
    DELETE FROM usuario WHERE usuarioID = pusuarioID;
    

END$$
DELIMITER ;

