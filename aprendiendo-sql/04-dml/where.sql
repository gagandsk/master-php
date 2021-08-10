-- CONSULTAS CON UNA CONDICION
SELECT * FROM usuarios WHERE email = 'sanji@gmail.com';

/*
OPERADORES DE COMPARACIÓN
    * =  (igual)
    * != (distinto)
    * <  (menor)
    * >  (mayor)
    * <= (menor o igual)
    * >= (mayor o igual)
    * BETWEEN
    * IN
    * IS NULL
    * IS NOT NULL
    * LIKE
    * NOT LIKE
*/

-- EJEMPLOS
/*1. Mostrar nombre y apellidos de todos los usuarios registrados en el 2021*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2021; 
/*1. Mostrar nombre y apellidos de todos los usuarios registrados QUE NO se registraron en 2021*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2021 OR ISNULL(fecha); 