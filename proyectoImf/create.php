<?php require_once 'includes/headerYesRegister.php'; ?>
<?php require_once 'includes/libraryPhp.php'; ?>

<section class="">

    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Añade una nueva entrada<br />
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                        quibusdam tempora at cupiditate quis eum maiores libero
                        veritatis? Dicta facilis sint aliquid ipsum atque?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">

                    <div class="card">
                        <div class="card-body py-5 px-md-5">

                            <form method="POST" action="createRequest.php" enctype="multipart/form-data">

                                <div class="row">
                                    <!-- Nombre input -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example1">Nombre</label>
                                            <input type="text" name="form3Example1" class="form-control" />

                                        </div>

                                    </div>
                                    <!-- Edad input -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="form3Example2">Edad</label>
                                            <input type="date" name="form3Example2" class="form-control" />

                                        </div>

                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3">Raza</label>
                                        <input type="text" name="form3Example3" class="form-control" />

                                    </div>

                                </div>

                                <!-- Género input -->
                                <div class="form-outline mb-4">
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        <option selected>Seleccione el género del animal</option>
                                        <option value="Hembra">Hembra</option>
                                        <option value="Macho">Macho</option>
                                    </select>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example5">Imagen</label>
                                    <input type="file" name="form3Example5" class="form-control" />

                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example6">Descripción</label>
                                    <textarea name="form3Example6" class="form-control"></textarea>

                                </div>

                                <!--Se muestran avisos si hay algún error-->
                                <?php if (isset($_SESSION['complete'])) : ?>
                                    <p class="alert alert-exito"><?= $_SESSION['complete'] ?></p>
                                <?php elseif (isset($_SESSION['errors']['general'])) : ?>
                                    <p class="alert alert-error"><?= $_SESSION['errors']['general'] ?></p>
                                <?php endif; ?>

                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'form3Example1') : ''; ?>
                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'form3Example2') : ''; ?>
                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'form3Example3') : ''; ?>
                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'gender') : ''; ?>
                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'form3Example5') : ''; ?>
                                <?php echo isset($_SESSION['errors']) ? errorAlert($_SESSION['errors'], 'form3Example6') : ''; ?>

                                <!-- Submit button -->

                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block mb-4">
                                    Guardar
                                </button>

                            </form>
                            <!--Borrado de errores para que no se queden almacenados-->
                            <?php deleteErrorCreate(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>

<?php require_once 'includes/footer.php'; ?>