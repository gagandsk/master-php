<!--EN ESTA PAGINA SOLO SE PUEDE ACCEDER SI ESTAS LOGEADO/REGISTRADO-->

<?php require_once 'includes/redirection.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/sidebar.php'; ?>

<!--CAJA PRINCIPAL-->
<div id="principal">
    <h1>Crear Categorias</h1>
    <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p><br/>
    <form action="save-category.php" method="POST">
        <label for="nombre">Nombre de la categoria</label>
        <input type="text" name="nombre">

        <input type="submit" value="Crear">
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>