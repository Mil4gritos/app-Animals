<?php


//Comprobación de que llegan los datos del formulario
if (isset($_POST)) {

    //Establecemos coxexión solo si tengo datos mediante post
    require_once 'includes/conexion.php';
    require_once 'create.php';


    //si no tenemos sesión la establecemos
    if (!isset($_SESSION)) {
        session_start();
    }
}


//Se recogen los valores del formulario de registro
//Con mysqli_real_escape_string escapo los datos tomando los datos como string por si hubiera comillas 
//Así evito que den errores en la bbdd, también por seguridad
$name = isset($_POST['form3Example1']) ? mysqli_real_escape_string($db, trim($_POST['form3Example1'])) : false;
$age = isset($_POST['form3Example2']) ? mysqli_real_escape_string($db, trim($_POST['form3Example2'])) : false;
$species = isset($_POST['form3Example3']) ? mysqli_real_escape_string($db, trim($_POST['form3Example3'])) : false;
$gender = isset($_POST['gender']) ? mysqli_real_escape_string($db, $_POST['gender']) : false;
$description = isset($_POST['form3Example6']) ? mysqli_real_escape_string($db, trim($_POST['form3Example6'])) : false;

//Array de errores del formulario 
$errors = array();

//VALIDACIONES//

//Nombre
if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {

    $ValidateN = true;
} else {
    $ValidateN = false;
    $errors['form3Example1'] = "El nombre no es válido";
}

//Edad
if (empty($age)) {

    $ValidateA = false;
    $errors['form3Example2'] = "Debe seleccionar la edad aprox del animal";
}

//Especie
if (!empty($species) && !is_numeric($species) && !preg_match("/[0-9]/", $species)) {

    $ValidateS = true;
} else {

    $ValidateS = false;
    $errors['form3Example3'] = "La raza no es válida";
}

//VALIDAR RADIOS GENERO

//Género
if (empty($gender)) {

    $ValidateG = false;
    $errors['gender'] = "Debe seleccionar el género del animal";
}

//Imagen

$img =  $_FILES['form3Example5'];
$nameImg = $img['name'];
$type = $img['type'];
$temp = $img['tmp_name'];
$full_path = $img['full_path'];
$uploadImg = '/Applications/XAMPP/xamppfiles/htdocs/proyectoImf/images/';
$addImg = $uploadImg.$nameImg;
//var_dump($img);
//die();
if (empty($img)) {

    $errors['form3Example5'] = "Debe introducir una imagen del animal";

} else {

    if ($type == "image/jpg" || $type == "image/jpeg" ||  $type == "image/gif" || $type == "image/png"){
        if(!file_exists($uploadImg)){
            
            mkdir($uploadImg,0777,true);
         
            move_uploaded_file($temp, $addImg);
           // chmod($uploadImg, 0777);  

        }else{
            move_uploaded_file($temp, $addImg);
        }


        $img = mysqli_real_escape_string($db, $nameImg);
       // $_SESSION['complete'] = "Registro completado con éxito";
     
    } else{
        $errors['form3Example5'] = "Formatos permitidos(jpg; jpeg; gif; png)";
    }
}

//Descripción
if (empty($description)) {

    $ValidateD = false;
    $errors['form3Example6'] = "Debe introducir una descripción";
}



//Comprobación de que no existe ningún error antes de grabar en la base de datos

$addAnimal = false;
if (count($errors) == 0) {
    $addAnimal = true;

    $sqlInsert = "INSERT INTO animales VALUES(NULL,'$name','$age','$species','$gender','$img','$description')";


    //INSERT ANIMAL EN LA TABLA ANIMALES DE LA BBDD

    $insert = mysqli_query($db, $sqlInsert);


    if ($insert) {

        $_SESSION['complete'] = "Registro completado con éxito";
        header('Location:create.php');
        
    } else {
        $_SESSION['errors']['general'] = "Fallo al insertar el nuevo registro";
        header('Location:create.php');
    }
} else {
    $_SESSION['errors'] = $errors;

    header('Location:create.php');
}
