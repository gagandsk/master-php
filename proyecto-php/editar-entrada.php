<!--EN ESTA PAGINA SOLO SE PUEDE ACCEDER SI ESTAS LOGEADO/REGISTRADO-->

<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
//SI LA CATEGORIA NO EXISTE, ME REDIRECCIONA AL INDEX.PHP
if (!isset($entrada_actual['id'])) {
    header("Location:index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

<div id="principal">
    <h1>Editar Entradas</h1>
    <p>Estas editando tu entrada con titulo: <?=$entrada_actual['titulo']?></p><br/>
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>">
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : '' ?>

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : '' ?>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php 
                $categorias = conseguirCategorias($db);
                if(!empty($categorias)):
                while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
                <option value="<?=$categoria['id']?>"<?=$categoria['id'] == $entrada_actual['categoria_id'] ? 'selected=selected"' : '' ?>>
                    <?=$categoria['nombre']?>
                </option>
            <?php
                endwhile;
                endif;
            ?>
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : '' ?>

        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores() ?>
</div>

<?php require_once 'includes/footer.php'; ?>