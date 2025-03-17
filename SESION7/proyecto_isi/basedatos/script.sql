CREATE TABLE usuario  (
  idusuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL,
  apellido varchar(100) NOT NULL,
  nro_documento varchar(12)  NOT NULL,
  usuario varchar(50) NOT NULL,
  pass varchar(100)  NOT NULL
) ENGINE = InnoDB;


CREATE TABLE categoria  (
  idcategoria int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre varchar(100) NOT NULL,
  imagen varchar(50) NOT NULL,
	estado char(1)NOT NULL
) ENGINE = InnoDB ;

CREATE TABLE producto (
  idproducto int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(100)  NOT NULL,
  precio decimal(10, 2) NOT NULL,
  imagen varchar(100)  NOT NULL,
  estado char(1)  NOT NULL,
  categoria_id int NOT NULL,
	FOREIGN KEY (categoria_id) REFERENCES categoria(idcategoria) 
) ENGINE = InnoDB;

INSERT INTO usuario (idusuario, nombre, apellido, nro_documento, usuario, pass) 
VALUES(null, 'Lucila', 'Cruz', '45454545', 'lucila', '123456');

INSERT INTO categoria (idcategoria, nombre, imagen,estado) VALUES
(null, 'Calzado', 'calzado.jpg','N'),
(null, 'Ropa', 'ropa.jpg','N'),
(null, 'Accesorios', 'accesorios.jpg','N'),
(null, 'Herramientas', 'herramientas.jpg','N');

INSERT INTO producto (idproducto, nombre, precio, imagen, estado, categoria_id) VALUES
(null, 'Zapatos', '115.90', 'zapatos.jpg', 'N', 1),
(null, 'Camisa blanca para hombre TALLA M', '129.90', 'camisa.jpg', 'N', 2),
(null, 'Pantalon', '220.65', 'pantalon.jpg', 'N', 2),
(null, 'Zapatillas', '90.00', 'zapatillanike.jpg', 'N', 1),
(null, 'Pintura', '80.00', 'balde-pato.jpg', 'N', 4),
(null, 'Camisa blanca para hombre V2', '124.89', 'brochas.jpg', 'N', 2);







