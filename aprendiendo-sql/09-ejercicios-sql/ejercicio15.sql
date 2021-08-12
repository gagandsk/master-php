/*
MOSTRAR LOS CLIENTES QUE MÁS ENCARGOS HAN ECHO Y MONSTRAR CUANTOS HICIERON
*/

SELECT cliente_id, COUNT(id) FROM encargos
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;


SELECT c.nombre, COUNT(e.id) FROM encargos e
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;