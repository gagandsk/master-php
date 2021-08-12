/*
MOSTRAR LISTADO DE CLIENTES (numero de cliente y el nombre)
MOSTRAR TAMBIEN EL NUMERO DE VENDEDOR Y SU NOMBRE
*/
SELECT c.id, c.nombre, v.id, CONCAT(v.nombre,' ', v.apellidos)  as 'Vendedor'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;