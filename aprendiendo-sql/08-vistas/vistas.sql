/*
VISTAS: La podemos definir como una consulta almacenada en la base de datos 
que se utiliza como una tabla virtual.No almacena datos sino que utiliza asociaciones
 y los datos originales de las tablas, de forma que se mantiene actualizada
*/

/*CREAR VISTA*/
CREATE VIEW entradas_con_nombres AS 
SELECT e.id, e.titulo, u.nombre AS 'Author',  c.nombre AS 'Categoria'
FROM entradas e
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.usuario_id = c.id;

/*ELIMINAR VISTA*/
DROP VIEW entradas_con_nombres;