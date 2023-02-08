<?php require_once 'includes/headerNotRegister.php'; ?>
<?php require_once 'includes/libraryPhp.php'; ?>

<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Inicie sesión en <br />
                        <span class="text-primary">proyecto imf</span>
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
                            <form method="POST" action="loginPost.php">
                                <!-- 2 column grid layout with text inputs for the first and last names -->

                                <?php if (isset($_SESSION['error_login'])) : ?>
                                        <p class="alert alert-error"><?= $_SESSION['error_login'] ?></p>
                                    <?php endif; ?>

                                <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" name="form3Example3" class="form-control" required />
                                        <label class="form-label" for="form3Example3">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" name="form3Example4" class="form-control" required />
                                        <label class="form-label" for="form3Example4">Contraseña</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" name="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            Recordar mi contraseña
                                        </label>
                                    </div>
                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!">¿Has olvidado la contraseña?</a>
                                    </div>
                                    <!-- Submit button -->

                                    

                                    <button type="submit" class="btn btn-primary btn-block mb-4">
                                        Acceder
                                    </button>

                            </form>
                            <?php deleteError(); ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Jumbotron -->
</section>
<!-- Section: Design Block --><?php require_once 'includes/footer.php' ?>