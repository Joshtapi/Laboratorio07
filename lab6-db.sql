

create schema `db-lab6`;


create table direccion (
	direc varchar(100),
    telefono varchar(100),
    email varchar(100),
    dias varchar(50),
    hora_inicio time,
    hora_cierre time
);

create table equipo (
	direccion varchar(50),
    coordinacion varchar(50),
    comunicacion varchar(50),
    administracion varchar(50)
);

create table contacto (
	nombre varchar(50),
    email varchar(50),
    asunto varchar(50),
    descripcion varchar(200)
);


INSERT INTO direccion (direc, telefono, email, dias, hora_inicio, hora_cierre) 
VALUES ('C/ Padre Feijoo, 5-1, 1504 A Coruna', '+34981216252/ =34 627484802', 'info@vilaseco.com', 'Lunes-Viernes', '10:00:00', '15:00:00' );

INSERT INTO equipo (direccion, coordinacion, comunicacion, administracion) 
VALUES ('Miriam Vilaseco', 'Silvia Garcia-Calvo','Carolina Nunez Roca', 'Julio Fresco');




CREATE TABLE `artistas_destacados` (
  `idartistas_destacados` INT NOT NULL,
  `anio_artistas` INT(4) NOT NULL,
  `nombre_artistas` VARCHAR(60) NOT NULL,
  `link_foto_artistas` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idartistas_destacados`));

ALTER TABLE `artistas_destacados` 
ADD COLUMN `apellido_artistas` VARCHAR(60) NOT NULL AFTER `nombre_artistas`;

INSERT INTO `artistas_destacados` (`idartistas_destacados`, `anio_artistas`, `nombre_artistas`, `apellido_artistas`, `link_foto_artistas`) VALUES ('1', '2021', 'Soledad', 'Torres', 'https://media.istockphoto.com/photos/close-up-portrait-of-beautiful-woman-picture-id1132090209?k=20&m=1132090209&s=612x612&w=0&h=GpoNHGU-WmXmRx8u7y3DBHrt9n-fbSIlnpQ9flo-OEc=');
INSERT INTO `artistas_destacados` (`idartistas_destacados`, `anio_artistas`, `nombre_artistas`, `apellido_artistas`, `link_foto_artistas`) VALUES ('2', '2022', 'Angeles', 'Lima', 'https://media.istockphoto.com/photos/beautiful-woman-at-the-beach-picture-id545444792?k=20&m=545444792&s=612x612&w=0&h=GWDa22Q92xa_v_vouMaB7eUu-9H2zPeZjEgk3gbBAjQ=');






CREATE TABLE `navar2` (
  `idnavar2` INT NOT NULL AUTO_INCREMENT,
  `navar` VARCHAR(45) NULL,
  `linknavar` VARCHAR(100) NULL,
  PRIMARY KEY (`idnavar2`));

INSERT INTO `navar2` (`idnavar2`, `navar`, `linknavar`) VALUES ('1', 'Home', 'paginaprincipal.html');
INSERT INTO `navar2` (`navar`, `linknavar`) VALUES ('Quienes Somos', 'Quien/quienessomos.html');
INSERT INTO `navar2` (`navar`, `linknavar`) VALUES ('Galeria', 'Galeria/galeria.html');
INSERT INTO `navar2` (`navar`, `linknavar`) VALUES ('Contactanos', 'Form/contactanos.html');


CREATE TABLE `imagenes` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `idimagenes` varchar(200) NOT NULL,
  `contenido` varchar(200) NOT NULL,
  PRIMARY KEY (`num`,`idimagenes`,`contenido`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('1','El 3 de mayo en Madrid o ''Los fusilamientos''', 'https://i.ibb.co/sCtxR6d/El-3-de-mayo-en-Madrid-o-Los-fusilamientos.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('2','La monaliza', 'https://i.ibb.co/qp9gkJm/monaliza.webp');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('3','El Descendimiento', 'https://i.ibb.co/THVC4g2/El-Descendimiento.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('4','Judit en el banquete de Holofernes', 'https://i.ibb.co/pJjn4vn/Judit-en-el-banquete-de-Holofernes.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('5','La Crucifixion', 'https://i.ibb.co/F5ZzzMj/La-Crucifixi-n.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('6','La Inmaculada Concepcion', 'https://i.ibb.co/C5GZsk7/La-Inmaculada-Concepci-n.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('7','Las meninas', 'https://i.ibb.co/F3xc42R/Las-meninas.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('8','Las tres Gracias', 'https://i.ibb.co/ZSKJtcn/Las-tres-Gracias.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('9','Triptico del Jardin de las delicias', 'https://i.ibb.co/Vjx3N0z/Tr-ptico-del-Jard-n-de-las-delicias.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('10','Autorretrato', 'https://i.ibb.co/s1cTLqG/Autorretrato.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('11','La Anunciacion', 'https://i.ibb.co/yXbYG2C/La-Anunciaci-n.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('12','El sueno de Jacob', 'https://i.ibb.co/YDdrbWD/El-sue-o-de-Jacob.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('13','El caballero de la mano en el pecho', 'https://i.ibb.co/styG2s4/El-caballero-de-la-mano-en-el-pecho.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('14','La noche estrellada', 'https://i.ibb.co/s1HrSDY/La-noche-estrellada.jpg');
INSERT INTO `imagenes` (`num`,`idimagenes`, `contenido`) VALUES ('15','Carlos V en la Batalla de Muhlberg', 'https://i.ibb.co/hF7nyLd/Carlos-V-en-la-Batalla-de-M-hlberg.jpg');

CREATE TABLE `titulo` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `titulo` (`idmenu`, `contenido`) VALUES ('1', 'Galeria');

CREATE TABLE `titulo2` (
  `idtitulo2` int(11) NOT NULL AUTO_INCREMENT,
  `contenido` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtitulo2`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

INSERT INTO `titulo2` (`idtitulo2`, `contenido`) VALUES ('1', 'MODERN ART GALERY');

CREATE TABLE `personal` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1

INSERT INTO `personal` (`ID`, `usuario`,`password`) VALUES ('1', 'Joshua','1234');


