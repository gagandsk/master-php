-- CONSULTAS DE AGRUPAMIENTO
SELECT titulo FROM entradas GROUP BY categoria_id;
SELECT titulo, categoria_id FROM entradas GROUP BY categoria_id;
/*Cantidad de entradas por categoria*/
SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;