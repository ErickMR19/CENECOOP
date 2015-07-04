-- ELIMINAR LA TABLA titulos

-- ESTADO poner el default en MATRICULADO
-- NOTA poner el default en -1
-- Agrega cod_curso en matriculas
-- Agrega matricula_temp


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
