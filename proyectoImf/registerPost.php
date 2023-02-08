<?php
 
//Comprobación de que llegan los datos del formulario
if (isset($_POST)) {

//Establecemos coxexión solo si tengo datos mediante post
 require_once 'includes/conexion.php';
 //Incluyo archivo de funciones php ibraryPhp.php
 require_once 'includes/libraryPhp.php';

//si no tenemos sesión la establecemos
 if(!isset ($_SESSION)){
    session_start();
 }


    //Se recogen los valores del formulario de registro
    //Con mysqli_real_escape_string escapo los datos tomando los datos como string por si hubiera comillas 
    //Así evito que den errores en la bbdd, también por seguridad

    $name = isset($_POST['form3Example1']) ? mysqli_real_escape_string($db,$_POST['form3Example1']) : false;
    $surname = isset($_POST['form3Example2']) ? mysqli_real_escape_string($db,$_POST['form3Example2']) : false;
    $email = isset($_POST['form3Example3']) ? mysqli_real_escape_string($db,trim($_POST['form3Example3'])) : false;
    $pass = isset($_POST['form3Example4']) ? mysqli_real_escape_string($db,$_POST['form3Example4']) : false;


    //Array de errores del formulario 
    $errors = array();


    //Validar datos antes de guardarlos en la base de datos

    //Nombre
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {

        $ValidateN = true;
    } else {
        $ValidateN = false;
        $errors['form3Example1'] = "El nombre no es válido";
    }
    //Apellidos
    if (!empty($surname) && !is_numeric($surname) && !preg_match("/[0-9]/", $surname)) {

        $ValidateS = true;
    } else {
        $ValidateS = false;
        $errors['form3Example2'] = "Los apellidos no son validos";
    }
    //Email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $ValidateE = true;
    } else {
        $ValidateE = false;
        $errors['form3Example3'] = "El email no es válido";
    }
    //Password
    if (!empty($pass)) {

        $ValidateP = true;
    } else {
        $ValidateP = false;
        $errors['form3Example4'] = "La contraseña está vacía";
    }

    //Comprobación de que no existe ningún error antes de grabar en la base de datos

    $addUser = false;
    if (count($errors) == 0) {
        $addUser = true;
        //Cifrar la contraseña
        $password_Secure = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 4]);
        $sqlInsert = "INSERT INTO usuarios VALUES(NULL,'$name','$surname','$email','$password_Secure')";


        //INSERT USUARIO EN LA TABLA USUARIOS DE LA BBDD

        $insert = mysqli_query($db, $sqlInsert);
     

        if ($insert) {
            $_SESSION['complete'] = "Registro completado con éxito";
            header('Location:register.php');

        } else {
            $_SESSION['errors']['general'] = "Fallo al insertar usuario";
            header('Location:register.php');
        }

  
    } else {
        $_SESSION['errors'] = $errors;

        header('Location:register.php');
    }
}
