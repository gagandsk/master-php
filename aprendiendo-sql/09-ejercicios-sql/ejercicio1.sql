/*DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCESIONARIO*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
    id INT(10) auto_increment NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(50),
    precio INT(20) NOT NULL,
    stock INT(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id INT(10) auto_increment NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    ciudad VARCHAR(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id INT(10) auto_increment NOT NULL,
    grupo_id INT(10) NOT NULL,
    jefe INT(10),
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100),
    cargo VARCHAR(50),
    fecha DATE,
    sueldo FLOAT(20,2),
    comision FLOAT(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY (grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id INT(10) auto_increment NOT NULL,
    vendedor_id INT(10),
    nombre VARCHAR(150) NOT NULL,
    ciudad VARCHAR(100),
    gastado FLOAT(50,2),
    fecha DATE,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id INT(10) auto_increment NOT NULL, 
    cliente_id INT(10) NOT NULL,
    coche_id INT(10) NOT NULL,
    cantidad INT(100),
    fecha DATE,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;

#RELLENAR LA BASE DE DATOS CON INFORMACION- INSERTS#

#COCHES#
	-- AL SER AUTOINCREMENTABLE EL ID, AQUI LE METEMOS UN 'NULL'
INSERT INTO coches VALUES (NULL,'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES (NULL,'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES (NULL,'Mercedes Ranchera', 'Mercedes', 32000, 24);
INSERT INTO coches VALUES (NULL,'Porche Cayena', 'Porche', 65000, 5);
INSERT INTO coches VALUES (NULL,'Lambo Aventador', 'Lambo', 170000, 2);
INSERT INTO coches VALUES (NULL,'Ferrari Spider', 'Ferrari', 245000, 80);

#GRUPOS#
INSERT INTO grupos VALUES (NULL,'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES (NULL,'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES (NULL,'Directores mecanicos', 'Madrid');
INSERT INTO grupos VALUES (NULL,'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES (NULL,'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES (NULL,'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES (NULL,'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES (NULL,'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES (NULL,'Vendedores C', 'Santiago de compostela');



#VENDEDORES#


#CLIENTES#


#ENCARGOS#





