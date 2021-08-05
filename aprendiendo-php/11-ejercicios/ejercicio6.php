<?php

/*
Ejercicio 6: Mostrar una tabla de HTML con todas las tablas de multiplicar del 1 al 10
*/

echo "<table border='2'><tr>"; //inicio de la table
echo "<tr>"; //inicio fila 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    }

echo "</tr>"; //cierrr 1 de celdas

echo "<tr>"; //inicio fila 2 de celdas
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
        
            for($j = 1; $j <= 10; $j++){
                echo "$i x $j = ".($i * $j)."<br>";
            }
        echo "</td>";
    }
echo "</tr>"; //cierre fila 2 de celdas

echo "</table>"; //fin de la table
