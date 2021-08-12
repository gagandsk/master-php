/*
LISTAR LOS CLIENTES QUE HAN ECHO ALGUN ENCARGO DEL COCHE 'MERCEDES RANCHERA'
*/
SELECT * FROM clientes WHERE id IN 
    (SELECT cliente_id FROM encargos
    WHERE coche_id IN
        (SELECT id FROM coches WHERE modelo LIKE '%Mercedes Ranchera%'));