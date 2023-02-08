<?php require_once 'conexion.php' ?>
<?php require_once 'includes/libraryPhp.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">Proyecto Imf</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="animales.php">Animales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Gestión</a>
                        </li>
                    </ul>

                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Mi perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="close.php">Cerrar Sesión</a>
                    </ul>
                </div>

            </div>
        </nav>
        
    </header>
    <div class="containerGeneral">