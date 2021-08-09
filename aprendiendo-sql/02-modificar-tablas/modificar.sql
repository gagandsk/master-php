-- RENOMBRAR UNA TABLA
/*ALTER TABLE nombre_table RENAME TO nuevo_nombre;*/
ALTER TABLE usuarios RENAME TO usuarios_renom;

-- CANVIAR NOMBRE DE UNA COLUMNA
/*ALTER TABLE nombre_table CHANGE campo_a_canviar nuevo_nombre_del_campo_a_canviar tipo_dato tipo_restriccion;*/
ALTER TABLE usuarios CHANGE apellidos apellido varchar(100) null;

-- MODIFICAR COLUMNA SIN CANVIAR EL NOMBRE 
/*ALTER TABLE nombre_table MODIFY nombre_campo tipo_dato tipo_restriccion;*/
ALTER TABLE usuarios MODIFY apellido char(50) not null;

-- AÑADIR NUEVA COLUMNA
/*ALTER TABLE nombre_table ADD nombre_nueva_columna tipo_dato tipo_restriccion*/
ALTER TABLE usuarios ADD bandera varchar(50) null;

-- AÑADIR RESTRICCION A COLUMNA
ALTER TABLE usuarios ADD CONSTRAINT uq_email UNIQUE (email);

-- BORRAR UNA COLUMNA
/*ALTER TABLE nombre_table DROP nombre_columna;*/
ALTER TABLE usuarios DROP bandera;