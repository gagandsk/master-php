-- RENOMBRAR UNA TABLA
/*ALTER TABLE nombre_table RENAME TO nuevo_nombre;*/
ALTER TABLE usuarios RENAME TO usuarios_renom;

-- CANVIAR NOMBRE DE UNA COLUMNA
/*ALTER TABLE nombre_table CHANGE campo_a_canviar nuevo_nombre_del_campo_a_canviar tipo_dato() tipo_restriccion;*/
ALTER TABLE usuarios CHANGE apellidos apellido varchar(100) null;

-- MODIFICAR COLUMNA SIN CANVIAR EL NOMBRE 
/*ALTER TABLE nombre_table MODIFY nombre_campo tipo_dato() tipo_restriccion;*/
ALTER TABLE usuarios MODIFY apellido char(50) not null;