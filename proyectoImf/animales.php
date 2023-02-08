<?php require_once 'includes/headerYesRegister.php'; ?>
<?php require_once 'includes/libraryPhp.php'; ?>

<div class="row container-fluid p-5 justify-content-center">

    <?php 
    
    $animals = listAnimals($db);
    //Comprobacion de que el array que nos mostrará los animales no está vacío
    if (!empty($animals)) :
        while ($animal = mysqli_fetch_assoc($animals)) : ?>


            <div class="card" style="width: 18rem;">
                <!--Aquí guardo la imagen que suba el usuario-->
                <img class="card-img-top" src="images/<?php echo $animal['foto']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $animal['nombre'] ?></h5>
                    <p>Raza: <?= $animal['raza'] ?></p>
                    <p>Edad: <?= $animal['edad'] ?></p>
                    <p>Sexo: <?= $animal['sexo'] ?></p>

                    <p class="card-text"><?= $animal['descripcion'] ?></p>


                </div>
            </div>



    <?php endwhile;
    endif; ?>
  
</div>
<?php require_once 'includes/footer.php'; ?>