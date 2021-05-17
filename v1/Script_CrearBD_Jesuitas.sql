-- Base de datos BD_Jesuitas (viajes de los jesuitas)
CREATE DATABASE IF NOT EXISTS Jesuitas DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE Jesuitas;

CREATE TABLE Jesuita(
	idJesuita tinyint unsigned  NOT NULL PRIMARY KEY,
	nombre varchar(50) NOT NULL,
	nombreAlumno varchar(60) NOT NULL,
	firma varchar(300) NOT NULL
);

CREATE TABLE Lugar(
	ip char(15) NOT NULL PRIMARY KEY,
	lugar varchar(30) NOT NULL
);

CREATE TABLE Visita(
    idVisita  smallint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
	idJesuita tinyint unsigned NOT NULL,
	ip char(15) NOT NULL,
	fechaHora datetime NOT NULL default NOW(),
	CONSTRAINT Lugar_Visita FOREIGN KEY (ip) REFERENCES Lugar(ip),
	CONSTRAINT Jesuita_Visita FOREIGN KEY (idJesuita) REFERENCES Jesuita(idJesuita)
);
