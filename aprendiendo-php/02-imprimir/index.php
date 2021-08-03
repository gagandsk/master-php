<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla - Master en PHP</title>
</head>

<body>
    <h2>Master en PHP</h2>

    <?="Curso de PHP - Victor Robles"?> <!--Atajo de echo-->

    <?php
        echo "<h3>Listado de videojuegos:</h3>";
        echo "<ul>"
                ."<li>GTA</li>"
                ."<li>The Witcher 3</li>"
                ."<li>Zelda Breath of the Wild</li>"
                ."<li>Red Dead Redemption 2</li>"
            ."</ul>";

        echo '<p>Esta es toda'.'-'.' la lista de juegos</p>';
    ?>

</body>

</html>

