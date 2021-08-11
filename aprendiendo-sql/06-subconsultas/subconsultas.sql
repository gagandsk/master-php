/*
- CONSULTAS QUE SE EJECUTAN DENTRO DE OTRAS 
- CONSISTE EN UTILIZAR LOS RESULTADOS DE LA SUBCONSULTA PARA OPERAR EN LA CONSULTA PRINCIPAL
- JUGAR CON CLAVES FORANEAS
*/

-- IN (SE UTILIZA CUANDO LAS SUBCONSULTAS NOS DEVUELVE MULTIPLES RESULTADOS)
/*SACAR USUARIOS CON ENTRADAS*/
SELECT * FROM usuarios WHERE id IN(SELECT usuario_id FROM entradas);
SELECT * FROM usuarios WHERE id NOT IN(SELECT usuario_id FROM entradas);

/*SACAR LOS USUARIOS QUE TANGAN ALGUNA ENTRADA QUE EN SU DESCRIPCION HABLEN DE SANJI*/
    -- 1. Muestra todos los datos
SELECT * FROM entradas WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE "%sanji%");

    -- 2. Solo el nombre y el apellido
SELECT nombre, apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE descripcion LIKE "%sanji%");


/*SACAR TODAS LAS ENTRADAS DE UNA CATEGORIA UTILIZANDO SU NOMBRE*/
SELECT titulo FROM entradas WHERE categoria_id IN(SELECT id FROM categorias WHERE nombre = 'Cocinero');

/*MOSTRAR LAS CATEGORIAS CON 3 O MÁS ENTRADA*/
SELECT * FROM categorias WHERE
    id IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

/*MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MIERCOLES (los dias de la semana en ingles o en mysql empiezan a contar desde el domingo(dia 1))*/

SELECT * FROM usuarios WHERE id IN 
    (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 4);

/*MOSTRAR EL NOMBRE DEL USUARIO QUE TENGA MAS ENTRADAS*/
SELECT CONCAT(nombre,' ', apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id = (SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

/*MOSTRAR LAS CATEGORIAS SIN ENTRADAS*/
SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);