<!--EN ESTA PAGINA SOLO SE PUEDE ACCEDER SI ESTAS LOGEADO/REGISTRADO-->

<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>Añade nuevas entradas al blog para que los usuarios puedan usarlas y disfrutar de nuestro contenido</p><br/>
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo">

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>
        </select>

        <input type="submit" value="Crear">
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>

