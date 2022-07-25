/*drop database PistaCarreras*/

create database PistaCarreras;

use PistaCarreras;

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
values("ADMIN"),("PILOTO");

insert into Usuario(correo,contrasena,nombre,apellido,edad,rolID)
values("admin@mail.com","0000","Admin","Pista",50,1),("lhamilton@mail.com","1234","Lewis","Hamilton",37,2),("mverstappen@mail.com","1234","Max","Verstappen",24,2),
("sperez@mail.com","1234","Sergio","Pérez",32,2),("cleclerc@mail.com","1234","Charles","Leclerc",24,2),("csainz@mail.com","1234","Carlos","Sainz",27,2);

insert into Vehiculo(modelo)
values("Mercedes W13"),("Red Bull RB18"),("Ferrari F1-75");

insert into Piloto(puntos,victorias,podios,usuarioID)
values(109,103,186,2),(208,26,68,3),(151,3,21,4),(170,5,18,5),(133,1,12,6);

insert into Pista(nombrePista,cantidadPilotos,recordVuelta,distanciaTotal)
values("Circuito de Barcelona-Catalunya",20,"00:1:18.149","4.675"),("Circuito Internacional de Bahrain",20,"00:1:31.447",5.412),("Circuito Albert Park",20,"00:01:20.260",5.278);

insert into Carrera(fecha,hora,cantidadVueltas,pistaID)
values("2022-06-06","00:10:00.000",73,1);

delimiter //

create procedure ConsultarUsuarios()
begin
	select * from Usuario;
end; //

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




