DROP DATABASE IF EXISTS bdci4;
CREATE DATABASE IF NOT EXISTS bdci4 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL PRIVILEGES ON bdci4.* TO 'userci'@'localhost' IDENTIFIED BY 'passwordci4';


USE bdci4;

CREATE TABLE roles (
	id_rol INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre_rol VARCHAR(30) NOT NULL
)ENGINE = InnoDB;


INSERT INTO roles (id_rol, nombre_rol) VALUES
	(745, 'Administrador'),
	(125, 'Operador');
	

CREATE TABLE usuarios (
	id_usuario INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	estatus_usuario TINYINT(1) NULL  DEFAULT -1 COMMENT '-1: Deshabilitado, 1: Habilitado',
	nombre_usuario VARCHAR(30) NOT NULL,
	ap_usuario VARCHAR(30) NOT NULL,
	am_usuario VARCHAR(30) NULL DEFAULT NULL,
	sexo_usuario TINYINT(1) NOT NULL COMMENT '0: Femenino, 1: Masculino',
	email_usuario VARCHAR(50) NOT NULL,
	password_usuario VARCHAR(64) NOT NULL,
	imagen_usuario VARCHAR(100) NULL DEFAULT NULL COMMENT 'profile.png',
	id_rol INT(3) NOT NULL,
	FOREIGN KEY (id_rol) REFERENCES roles (id_rol) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE = InnoDB;


INSERT INTO usuarios (id_usuario, nombre_usuario, ap_usuario, sexo_usuario, email_usuario, password_usuario, id_rol) VALUES
	(NULL, 'Fanni Leilani', 'Gutierres', 0, 'fanni@live.com', SHA2('admon123',256), 745),
	(NULL, 'Marcos Braulio', 'Calva', 1, 'marcos_braulio@live.com', SHA2('operador123',256), 125);