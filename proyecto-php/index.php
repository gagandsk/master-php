<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/sidebar.php';
/*echo $_SERVER['REMOTE_ADDR']; //IP DEL CLIENTE*/
?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Ultimas entradas</h1>

    <?php
    $entradas = conseguirUltimasEntradas($db);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <a href="">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span style="color:#4e4e4e; margin-top:10px; font-size:14px;"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p><?= substr($entrada['descripcion'], 0, 200)."..."?></p>
                </a>
            </article>
    <?php
        endwhile;
    endif;
    ?>

    <div id="ver-todas"><a href="">Ver todas las entradas</a></div>
</div>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>