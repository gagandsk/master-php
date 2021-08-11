-- CONSULTAS DE AGRUPAMIENTO
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
/*Cantidad de entradas por categoria*/
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

-- CONSULTAS DE AGRUPAMIENTO CON CONDICIONES
/*HACING es lo mismo que 'WHERE', pero sirve para consultas de agrupamiento*/
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 1;

/*
AVG     Sacar la media
COUNT   Contar numero de elementos
MAX     Devuelve el valor maximo del grupo
MIN     Devuelve el valor minimo del grupo
SUM     Sumar todo el contenido del grupo
*/

SELECT AVG(id) AS 'Media de entradas' FROM entradas;
SELECT MAX(id) AS 'MAXIMO ID' , titulo FROM entradas;
SELECT MIN(id) AS 'MINIMO ID' , titulo FROM entradas;
SELECT SUM(id) AS 'SUMA DE TODOS LOS ID' , titulo FROM entradas;