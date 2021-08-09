/*
TIPOS DE DATOS  
    - int(numero de cifras)      ENTERO
    - integer(numero de cifras)  ENTERO (maximo 4294967295)
    - varchar(numero de cifras)  STRING / VALOR ALFANUMERICO  (max. 255 caracteres)
    - char (numero de cifras)    STRING / VALOR ALFANUMERICO
    - float(numero de decimales) DECIMAL / COMA FLOTANTE 
    - date, time, timestamp

    //STRING MAS GRANDES
    - TEXT (max. 65535 caracteres)
    - MEDIUMTEXT (max. 16 millones de caracteres)
    - LONGTEXT (max. 4 billones de caracteres)

    //ENTEROS MAS GRANDES
    - MEDIUMINT
    - BIGINT
*/
/*desc nombr_table (muestra como esta formada esa tabla)*/

/*CREAR TABLA (el nombre de las tablas siempre en plural)*/

CREATE TABLE usuarios (
    id         int(11),
    nombre     varchar(100),
    apellidos  varchar(255),
    email      varchar(100),
    password   varchar(255)
);

/*drop table nombre_tabla(borrar tabla)*/