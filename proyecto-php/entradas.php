<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/sidebar.php';
?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Todas entradas</h1>

    <?php
    $entradas = conseguirEntradas($db, null);
    if (!empty($entradas)) :
        while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>
            <article class="entrada">
                <a href="">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <span style="color:#4e4e4e; margin-top:10px; font-size:14px;"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p><?= substr($entrada['descripcion'], 0, 200)."."?></p>
                </a>
            </article>
    <?php
        endwhile;
    endif;
    ?>
</div>

<?php require_once 'includes/footer.php'; ?>

</body>

</html>