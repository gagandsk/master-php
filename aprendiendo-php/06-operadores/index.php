<?php
//Operadores Aritméticos
$numero1 = 550;
$numero2 = 3;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Division: '.($numero1/$numero2).'<br/>';
echo 'Multiplicacion: '.($numero1*$numero2).'<br/>';
echo 'Resto: '.($numero1%$numero2).'<br/>'; //Modulo o Resto de una division


//Operadores incremento y decremento
$year = 2019;

//Incremento
$year++; //$year = $year + 1;

//Decremento
$year--; //$year = $year - 1;

//Pre-incremento
++$year; //$year = 1 + $year;

//Pre-decremento
--$year; //$year = 1 - $year;

echo '<h1>'.$year.'<h1/>'

?>