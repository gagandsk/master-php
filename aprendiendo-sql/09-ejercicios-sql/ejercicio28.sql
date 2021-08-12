/*
MOSTRAR TODOS LOS VENDEDORES Y EL NUMERO DE CLIENTES.
SE DEBEN MOSTRAR TENGAN O NO CLIENTES
*/

SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;