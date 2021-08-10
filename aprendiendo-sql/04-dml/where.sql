-- CONSULTAS CON UNA CONDICION
SELECT * FROM usuarios WHERE email = 'sanji@gmail.com';

/*
OPERADORES DE COMPARACIÓN
    * =        (igual)
    * !=       (distinto)
    * <        (menor)
    * >        (mayor)
    * <=       (menor o igual)
    * >=       (mayor o igual)
    * BETWEEN
    * IN
    * IS NULL
    * IS NOT NULL
    * LIKE
    * NOT LIKE
*/


/*
OPERADORES LOGICOS
    * OR
    * AND
    * NOT
*/

/*
COMODINES
    * CUALQUIER CANTIDAD DE CARACTERES : %
    * UN CARACTER DESCONOCIDO: _
*/

-- EJEMPLOS
/*1. Mostrar nombre y apellidos de todos los usuarios registrados en el 2021*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = 2021; 
/*2. Mostrar nombre y apellidos de todos los usuarios registrados QUE NO se registraron en 2021*/
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != 2021 OR ISNULL(fecha); 

/*3. Mostrar el email de los usuarios cuyo apellido contenga la letra A y su contraseña sea 123*/
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '123';