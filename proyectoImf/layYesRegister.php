<?php require_once 'includes/headerYesRegister.php' ?>
<?php require_once 'includes/libraryPhp.php' ?>

<?php if (isset($_SESSION['usuario'])) : ?>
    <div class="block" id="usuarioLogueado">
        <h2>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h2>
    </div> <!--principal>

<?php endif; ?>




<?php require_once 'includes/footer.php' ?>	