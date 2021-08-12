/*
OBTENER UNA LISTA DE LOS NOMBRES DE LOS CLIENTES 
CON EL IMPORTE DE SUS ENCARGOS ACUMULADO
*/

SELECT ci.nombre, SUM(precio*cantidad) AS 'Importe'
FROM clientes ci
INNER JOIN encargos en ON ci.id = en.cliente_id
INNER JOIN coches co ON en.coche_id = co.id
GROUP BY ci.nombre
ORDER BY 2;
