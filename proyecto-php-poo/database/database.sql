CREATE DATABASE tienda_master;

USE tienda_master;


CREATE TABLE usuarios(
    id          int(255) AUTO_INCREMENT not null,
    nombre      varchar(100) not null,
    apellidos   varchar(255),
    email       varchar(255) not null,
    password    varchar(255) not null,
    rol         varchar(20),
    imagen      varchar(255),
    CONSTRAINT PK usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email) -- EL EMAIL SIEMPRE ES UN UNIQUE!!!!!!! SOLO PUEDE HABER 1 REGISTRO CON EL MISMO EMAIL

)ENGINE=InnoDb; --USAREMOS ESTE ENGINE PARA MANTENER LA INTEGRIDAD REFERENCIAL (LAS CLAVES AJENAS Y TODO ESO)