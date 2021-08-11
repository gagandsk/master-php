/*ENGINE=InnoDb = forma de almacenar los datos en mysql, 
nos permite mantener la integridad referencial, que haya relaciones entre las tablas
este engine tmbn mejora el rendimiento a la hora de 
insertar o modificar datos que haya en una base de datos*/


CREATE TABLE usuarios(
    id        int(255) auto_increment not null,
    nombre    varchar(100) not null,
    apellidos varchar(100) not null,
    email     varchar(255) not null,
    password  varchar(255) not null,
    fecha     date,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email) -- el email va ser unico
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id      int(255) auto_increment not null,
    nombre  varchar(255) not null,
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id             int(255) auto_increment not null,
    usuario_id     int(255) not null,
    categoria_id   int(255) not null,
    titulo         varchar(255) not null, 
    descripcion    MEDIUMTEXT,
    fecha          date not null ,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios (id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id) 
)ENGINE=InnoDb;

/*
ON DELETE
    - CASCADE
    - SET NULL
    - SET DEFAULT
    - NO ACTION
ON UPDATE CASCADE
*/