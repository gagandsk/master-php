/*
LISTAR LOS ENCARGOS CON EL NOMBRE DEL COCHE, EL NOMBRE DEL CLIENTE Y EL NOMBRE DE LA CIUDAD,
PERO UNICAMENTE CUANDO SEAN DE BARCELONA
*/
SELECT e.id, co.modelo, c.nombre, c.ciudad 
FROM encargos e
INNER JOIN coches co ON co.id = e.coche_id
INNER JOIN clientes c ON c.id = e.cliente_id
WHERE c.ciudad = 'Barcelona';