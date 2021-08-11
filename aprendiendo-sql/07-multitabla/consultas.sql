/*
CONSULTA MULTITABLA: consultas que sirven para consultar varias tablas en una sola tabla
*/

/*MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA*/
SELECT e.id, e.titulo, u.nombre AS 'Author', c.nombre AS 'Categoria'
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;