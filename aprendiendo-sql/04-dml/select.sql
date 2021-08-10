-- MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA
SELECT nombre, apellidos FROM usuarios;

-- MOSTRAR TODOS LOS CAMPOS
SELECT * FROM usuarios;

-- OPERADORES ARITMETICOS
SELECT email , (4+7) AS 'Operacion' FROM usuarios;

-- FUNCIONES MATEMATICAS
SELECT ABS(7) AS 'Operacion' FROM usuarios;
SELECT CEIL(7.2) AS 'Operacion' FROM usuarios;
SELECT FLOOR(7.2) AS 'Operacion' FROM usuarios;
SELECT PI() AS 'Operacion' FROM usuarios;
SELECT RAND() AS 'Operacion' FROM usuarios;
SELECT ROUND(id, 2) AS 'Operacion' FROM usuarios;
SELECT SQRT(7.82) AS 'Operacion' FROM usuarios;
SELECT TRUNCATE(7.82, 2) AS 'Operacion' FROM usuarios; -- QUITAR DECIMALES

-- FUNCIONES PARA TEXTOS
SELECT UPPER(nombre) FROM usuarios;
SELECT LOWER(nombre) FROM usuarios;
SELECT CONCAT(nombre, ' ', apellidos) AS 'Conversion'FROM usuarios;
SELECT UPPER(CONCAT(nombre, ' ', apellidos)) AS 'Conversion'FROM usuarios; -- FUNCION DENTRO DE OTRA FUNCION
SELECT email, LENGTH(nombre) FROM usuarios;
SELECT TRIM(CONCAT('    ', nombre, ' ', apellidos, '        ')) AS 'Conversion'FROM usuarios;

-- FUNCIONES PARA FECHAS
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;
SELECT email, DATEDIFF(CURDATE(), fecha) AS 'Diferencia de dias' FROM usuarios; -- DIFERENCIAS ENTRE FECHAS
SELECT email, DAYNAME(fecha) AS 'Nombre del dia' FROM usuarios;
SELECT email, DAYOFMONTH(fecha) AS 'Dia del mes ' FROM usuarios;
SELECT email, DAYOFWEEK(fecha) AS 'Dia del la semana' FROM usuarios;
SELECT email, DAYOFYEAR(fecha) AS 'Dia del mes' FROM usuarios;
SELECT email, MONTH(fecha) AS 'Mes del año' FROM usuarios;
SELECT email, YEAR(fecha) AS 'Año al cual pertenece la fecha' FROM usuarios;
SELECT email, DAY(fecha) AS 'Dia al cual pertenece la fecha' FROM usuarios;
SELECT email, HOUR(fecha) AS 'Hora' FROM usuarios;
SELECT email, CURTIME() AS 'Hora actual' FROM usuarios; -- HORA ACTUAL
SELECT email, SYSDATE() AS 'Hora completa' FROM usuarios; -- HORA COMPLETA DEL SERVIDO/SISTEMA
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') AS 'TIPO FORMATO' FROM usuarios; -- CANVIAR FORMATO DE FECHA

-- FUNCIONES GENERALES
SELECT email, STRCMP('HOLA', 'HOLA') FROM usuarios; -- COMPARAR SI DOS VALORES SON IGUALES O NO
SELECT VERSION() FROM usuarios;
SELECT USER() FROM usuarios;
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;
SELECT IFNULL (apellidos, 'Este campo esta vacio') FROM usuarios;