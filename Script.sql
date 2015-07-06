/*
 ** SOBREESCRIBIR EN APP/CONFIG/DATABASE.PHP LA CONFIGURACION QUE TENGAN CON LOS SIGUIENTES DATOS
 ** PUEDEN CORRER TODO EL SCRIPT SEGUIDO
 **
 
 class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'cenecoop',
		'password' => 'cenecoop',
		'database' => 'cenecoop',
		'prefix' => '',
		//'encoding' => 'utf8',
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
 **
  */



-- --------------- ELIMINA EL USUARIO CENECOOP SI EXISTE -------------------

SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI';
USE mysql ;
DROP PROCEDURE IF EXISTS mysql.drop_user_if_exists ;
DELIMITER $$
CREATE PROCEDURE mysql.drop_user_if_exists()
BEGIN
  DECLARE foo BIGINT DEFAULT 0 ;
  SELECT COUNT(*)
  INTO foo
    FROM mysql.user
      WHERE User = 'cenecoop' and  Host = 'localhost';
   IF foo > 0 THEN
         DROP USER 'cenecoop'@'localhost' ;
  END IF;
END ;$$
DELIMITER ;
CALL mysql.drop_user_if_exists() ;
DROP PROCEDURE IF EXISTS mysql.drop_users_if_exists ;
SET SQL_MODE=@OLD_SQL_MODE ;

-- -----------------------------------------------------------------------

-- ------------ ELIMINA LA BASE DE DATOS CENECOOP SI EXISTE ---------------
DROP SCHEMA IF EXISTS cenecoop;
-- -----------------------------------------------------------------------

-- ------------------ CREA LA BASE DE DATOS CENECOOP ----------------------
CREATE SCHEMA Cenecoop DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
-- ------------------------------------------------------------------------


-- --------- CREA EL USUARIO CENECOOP Y LE DA PERMISOS EN LA BASE -----------
CREATE USER 'cenecoop'@'localhost' IDENTIFIED BY 'cenecoop';

GRANT ALL ON Cenecoop.* TO 'cenecoop'@'localhost';
-- ---------------------------------------------------------------------------

-- --------------- CREA TODAS LAS TABLAS EN LA BASE DE DATOS -----------------
USE Cenecoop;

CREATE TABLE personas 
(
	
	id		 		VARCHAR(15)		PRIMARY KEY,	
	nombre			VARCHAR(15)		NOT NULL,
	apellido1		VARCHAR(15)		NOT NULL,
	apellido2		VARCHAR(15),
	telefono		NUMERIC,
	nacionalidad	VARCHAR (20)	NOT NULL,
	fecha_nacimiento	DATE			NOT NULL,	
	genero			CHAR			NOT NULL
);


CREATE TABLE users 
(
	username 		VARCHAR(40) 	PRIMARY KEY	,
	password		VARCHAR(255)	NOT NULL	,
	cedula	 		VARCHAR(15)		NOT NULL	,
	tokenhash		VARCHAR(255)	NOT NULL	,
	rol				VARCHAR(15)		NOT NULL	,
		FOREIGN KEY (cedula) REFERENCES personas(id)		
);

CREATE TABLE estudiantes 
(
	
	id		 		VARCHAR(15)		PRIMARY KEY,	
	nivel_academico	VARCHAR(25)		NOT NULL,
	provincia		VARCHAR(20)			NOT NULL,
	canton			VARCHAR(20)			NOT NULL,
	region			VARCHAR(20)			NOT NULL,
	ocupacion		VARCHAR(15) 	NOT NULL, 	
		FOREIGN KEY (id) REFERENCES personas(id)
);

CREATE TABLE cooperativas 
(
	id			 	INT PRIMARY KEY AUTO_INCREMENT,
	nombre_coop		VARCHAR(20) NOT NULL,
	correo_coop		VARCHAR(20),
	telefono_coop	NUMERIC
);

CREATE TABLE cooperativistas 
(
	id 				int(11) 		PRIMARY KEY AUTO_INCREMENT,
	cedula_coop 	VARCHAR(15)		NOT NULL,	
	cod_cooperativa	INT			NOT NULL,
	cargo_coop		VARCHAR(15) 	NOT NULL, 	
	sector_coop		VARCHAR(15)		NOT NULL,
		FOREIGN KEY (cedula_coop) REFERENCES estudiantes(id),

		FOREIGN KEY (cod_cooperativa) REFERENCES cooperativas(id)
);




CREATE TABLE profesores 
(
	id	 	VARCHAR(15) 	PRIMARY KEY,
		FOREIGN KEY (id) REFERENCES personas(id)
);


CREATE TABLE administradores
(
	id 		VARCHAR(15) 	PRIMARY KEY,
		FOREIGN KEY (id) REFERENCES personas(id)
);

CREATE TABLE plandeestudios
(
	id		int(11) 	PRIMARY KEY AUTO_INCREMENT,
	nombre_plan	VARCHAR (25)	NOT NULL

);

CREATE TABLE cursos
(
	id		 	VARCHAR(10)		PRIMARY KEY,
	nombre_cur	VARCHAR(35)		NOT NULL,		
	modulo		TINYINT(2)		NOT NULL,
	bloque		TINYINT(2)		NOT NULL,
	cod_plan	int (11)	NOT NULL,
		FOREIGN KEY (cod_plan) REFERENCES plandeestudios(id)

);



CREATE TABLE periodos
(
	id			VARCHAR(10)	PRIMARY KEY,
	anyo 		YEAR(4)		NOT NULL,
	trimestre	TINYINT(1)	NOT NULL,
	inicio		DATE		NOT NULL,
	fin			DATE		NOT NUll
);

CREATE TABLE grupos
(
	id		 		VARCHAR(8) 	PRIMARY KEY,
	NumGrupo		Numeric		NOT NULL,
	Cupo			NUMERIC		NOT NULL,
	NumEstudiantes	NUMERIC		NOT NULL,
	Horario			VARCHAR(15)	NOT NULL,
	CodPeriodo		VARCHAR(10)	NOT NULL,
	CodCurso		VARCHAR(10)	NOT NULL,
	Cedulaprof		VARCHAR(15)		NOT NULL,
		FOREIGN KEY (CodPeriodo)REFERENCES periodos(id),
		FOREIGN KEY (CodCurso)	REFERENCES cursos(id),
		FOREIGN	KEY	(Cedulaprof)REFERENCES profesores(id)
);


CREATE TABLE matriculas
(
	id 				int(11) 	PRIMARY KEY AUTO_INCREMENT,
	cedula_est		VARCHAR(15) 	NOT NULL,
	cod_grupo		VARCHAR(8)	NOT NULL,
	cod_curso		VARCHAR(10)	NOT NULL,
	estado			VARCHAR(16) default 'MATRICULADO',
	fecha_matricula	DATE		NOT NULL,
	pago			TINYINT(1),
	nota_final		decimal(3,2) default -1,
		FOREIGN KEY (cedula_est) REFERENCES 	estudiantes (id),
		FOREIGN KEY (cod_curso) REFERENCES 	cursos (id),
		FOREIGN KEY (cod_grupo) 	REFERENCES	grupos(id)
);


CREATE TABLE matricula_temp
(
	id 				int(11) 	PRIMARY KEY AUTO_INCREMENT,
	cedula_est		VARCHAR(15) 	NOT NULL,
	cooperativista  TINYINT(1) default 0,
	cod_curso		varchar(10) NOT NULL,
	fecha_matricula	TIMESTAMP		NOT NULL,
	repitente		TINYINT(1) default 0,
		FOREIGN KEY (cedula_est) REFERENCES 	estudiantes (id),
		FOREIGN KEY (cod_curso) REFERENCES 	cursos (id)
);

/*TRIGGER UPDATE BEFORE en MatriculaTemps*/
CREATE TRIGGER `MatriculaTemp` BEFORE INSERT ON `matricula_temp` FOR EACH ROW BEGIN

SET @cpt := (SELECT COUNT(*) FROM `cooperativistas` WHERE NEW.cedula_est = cedula_coop);

IF @cpt > 0 THEN
    SET NEW.cooperativista = 1;
END IF;

SET @reprobadas := (SELECT COUNT(*)
	FROM MATRICULAS
	WHERE NEW.cedula_est = cedula_est AND NEW.cod_curso = cod_curso AND nota_final<= 7.00);

IF @reprobadas > 0 THEN
    SET NEW.repitente = 1;
END IF;

SET NEW.fecha_matricula = SYSDATE();

END


--Trigger en Matricula, after Uptdate

BEGIN

IF(NEW.nota_final >= 7.0) THEN
SET NEW.estado = 'APROBADO';
END IF;

IF(NEW.nota_final < 7.0) THEN
SET NEW.estado = 'REPROBADO';
END IF;


END


-- Se agrega expendiente academico
-- Descarga del CSV



CREATE TABLE requisitoscursos
(
	id 			int(11) 	PRIMARY KEY AUTO_INCREMENT,
	cod_curso	VARCHAR(10) 	NOT NULL,
	requisito 	VARCHAR(10)		NOT NULL, 
		FOREIGN KEY (cod_curso) REFERENCES CURSOS (id),
		FOREIGN KEY (requisito) REFERENCES CURSOS (id)
);

CREATE TABLE calificaciones
(
	id 			int(11) 	PRIMARY KEY AUTO_INCREMENT,
	id_matriculas int(11) NOT NULL,
	nota		DECIMAL(3,2)			NOT NULL,		
	semana		TINYINT(1) 	NOT NULL,		
		FOREIGN KEY (id_matriculas) 	REFERENCES  matriculas(id)
		

);





CREATE TABLE imparte
(
	id 				int(11) 		PRIMARY KEY AUTO_INCREMENT,
	cod_curso		VARCHAR(10)		NOT NULL,
	cedula_prof		VARCHAR(15)		NOT NULL,
		FOREIGN KEY (cod_curso) 		REFERENCES 	cursos(id),
		FOREIGN KEY	(cedula_prof) 	REFERENCES	profesores(id)
);

COMMIT;
-- ----------------------------------------------------------------