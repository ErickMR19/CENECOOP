CREATE SCHEMA Cenecoop DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;





CREATE TABLE personas 
(
	
	id		 		VARCHAR(15)		PRIMARY KEY,	
	nombre			VARCHAR(15)		NOT NULL,
	apellido1		VARCHAR(15)		NOT NULL,
	apellido2		VARCHAR(15),
	telefono		NUMERIC,
	nacionalidad	VARCHAR (20)	NOT NULL,
	fecha_nacimiento	DATE			NOT NULL,	
	genero			CHAR			NOT NULL,
	rol				VARCHAR(15)		NOT NULL
);

CREATE TABLE users 
(
	username 		VARCHAR(30) 	PRIMARY KEY,
	cedula 		VARCHAR(15)			NOT NULL,
	password	VARCHAR(255)		NOT NULL,	
		FOREIGN KEY (cedula) REFERENCES personas(id)		
);


	

CREATE TABLE estudiantes 
(
	
	id		 		VARCHAR(15)		PRIMARY KEY,	
	nivel_academico	VARCHAR(15)		NOT NULL,
	provincia		NUMERIC			NOT NULL,
	canton			NUMERIC			NOT NULL,
	region			NUMERIC			NOT NULL,
	ocupacion		VARCHAR(15) 	NOT NULL, 	
		FOREIGN KEY (id) REFERENCES personas(id)
);

CREATE TABLE cooperativas 
(
	id			 	NUMERIC PRIMARY KEY,
	nombre_coop		VARCHAR(20) NOT NULL,
	correo_coop		VARCHAR(20),
	telefono_coop	NUMERIC
);

CREATE TABLE cooperativistas 
(
	id 				int(11) 		PRIMARY KEY AUTO_INCREMENT,
	cedula_coop 	VARCHAR(15)		NOT NULL,	
	cod_cooperativa	NUMERIC			NOT NULL,
	cargo_coop		VARCHAR(15) 	NOT NULL, 	
	sector_coop		VARCHAR(15)		NOT NULL,
		FOREIGN KEY (cedula_coop) REFERENCES personas(id),

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
	nombre_cur	VARCHAR(30)		NOT NULL,		
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
	estado			VARCHAR(10) NOT NULL,
	fecha_matricula	DATE		NOT NULL,
	pago			TINYINT(1),
	nota_final		decimal(3,2),
		FOREIGN KEY (cedula_est) REFERENCES 	estudiantes (id),
		FOREIGN KEY (cod_grupo) 	REFERENCES	grupos(id)
);


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



CREATE TABLE titulos 
(
	id 			int(11) 	PRIMARY KEY AUTO_INCREMENT,
	cedula_est 	VARCHAR(15) 	NOT NULL,
	titulo		VARCHAR(10)		NOT NULL,       	
		FOREIGN KEY (cedula_est) REFERENCES estudiantes(id)
);


CREATE TABLE imparte
(
	id 				int(11) 		PRIMARY KEY AUTO_INCREMENT,
	cod_curso		VARCHAR(10)		NOT NULL,
	cedula_prof		VARCHAR(15)		NOT NULL,
		FOREIGN KEY (cod_curso) 		REFERENCES 	cursos(id),
		FOREIGN KEY	(cedula_prof) 	REFERENCES	profesores(id)
);
