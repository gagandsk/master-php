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