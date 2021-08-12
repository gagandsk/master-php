/*
SACAR LOS VENDEDORES QUE TIENEN JEFE Y SACAR EL NOMBRE DEL JEFE
*/
 -- clave reflexiva
 
SELECT CONCAT(v1.nombre,' ',v1.apellidos) AS 'Vendedor', CONCAT(v2.nombre,' ',v2.apellidos) AS 'JEFE' 
FROM vendedores v1
INNER JOIN vendedores v2 ON v1.jefe = v2.id;