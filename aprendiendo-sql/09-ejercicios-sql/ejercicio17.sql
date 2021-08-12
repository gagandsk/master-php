/*
OBTENER UN LISTADO CON LOS CARGOS REALIZADOS POR EL CLIENTE 'FRUTERIA ANTONIA INC'
*/
SELECT e.id AS 'Nº Encargo', cantidad, c.nombre, co.modelo, e.fecha
FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
INNER JOIN coches co ON co.id = e.coche_id
WHERE e.cliente_id IN 
    (SELECT id FROM clientes 
    WHERE nombre = 'FRUTERIA ANTONIA INC');