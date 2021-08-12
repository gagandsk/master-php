/*
OBTENER LISTADO DE CLIENTES ATENDIDOS POR EL VENDEDOR 'DAVID LOPEZ'
*/
SELECT * FROM clientes
WHERE vendedor_id IN 
    (SELECT id FROM vendedores 
    WHERE nombre = 'David' AND apellidos = 'Lopez');

-- LIKE CONSUME MAS RECURSOS