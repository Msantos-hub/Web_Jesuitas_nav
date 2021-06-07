CREATE DATABASE IF NOT EXISTS appJesuita DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE appJesuita;

CREATE TABLE Jesuita(
	idJesuita CHAR(15) NOT NULL PRIMARY KEY,
	Nombre VARCHAR(50) NOT NULL,
	Firma VARCHAR(200) NOT NULL
);

CREATE TABLE Lugar(
	idLugar TINYINT UNSIGNED NOT NULL PRIMARY KEY,
	nombre VARCHAR(30) NOT NULL
);

CREATE TABLE Maquina(

	CHAR(15) NOT NULL PRIMARY KEY,
	nombreAlumno VARCHAR(50) NULL,
	Nombre VARCHAR(20) NOT NULL,
	idJesuita CHAR(15) NULL ,
	idLugar TINYINT UNSIGNED NULL,
	tipo CHAR (2) NOT NULL,
	idUsuario SMALLINT NOT NULL,
	password varchar(250) NOT NULL,
	CONSTRAINT FK_MaquinaLugar FOREIGN KEY (idLugar) REFERENCES Lugar(idLugar),
	CONSTRAINT FK_MaquinaJesuita FOREIGN KEY (idJesuita) REFERENCES Jesuita(idJesuita)
);

CREATE TABLE Visita(
	numVisita SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ip CHAR(15) NOT NULL,
	idJesuita CHAR(15) NOT NULL UNIQUE ,
	idLugar TINYINT UNSIGNED NOT NULL UNIQUE ,
	fechaHora DATE NOT NULL,
	CONSTRAINT FK_visitaJesuita FOREIGN KEY (idJesuita) REFERENCES Maquina(idJesuita),
	CONSTRAINT FK_visitalugar FOREIGN KEY (idLugar) REFERENCES Maquina(idLugar)
);

ALTER TABLE Maquina ADD CONSTRAINT CH_tipo CHECK (tipo='a' OR tipo='u');

ALTER TABLE Visita ADD CONSTRAINT CH_ip CHECK (ip <> idJesuita);

