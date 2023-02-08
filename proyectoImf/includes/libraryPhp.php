<?php

//Función para mostrar aviso en el registro cuando los datos no son válidos

function errorAlert($errors, $field)
{
    $alert='';
    if (isset($errors[$field]) && !empty($field)) {
        $alert = "<p>" . $errors[$field] . "</p";
    }
    return $alert;
}

//función para borrar los errores

function deleteError()
{
    $delete = false;

    if (isset($_SESSION['errors'])) {
        $_SESSION['errors'] = null;
       // $delete = session_unset($_SESSION['errors']);
    }

    if (isset($_SESSION['complete'])) {
        $_SESSION['complete'] = null;
      // $delete = session_unset($_SESSION['complete']);
    }
    //Si hay errores borro la sesión
    if (isset($_SESSION['error_login'])) {

        $_SESSION['error_login'] = null;

      //  $delete = session_unset($_SESSION['error_login']);
    }

    return $delete;
}


function listAnimals($conexion)
{
    $sql = "SELECT * FROM animales ORDER BY id ASC";

    $animals = mysqli_query($conexion, $sql);
    $result = array();

    if ($animals && mysqli_num_rows($animals) >= 1) {

        $result = $animals;
    } 

    return $result;
}

//Función para borrar los errores del formulario de nuevos registros 

function deleteErrorCreate()
{
    $delete = false;

    if (isset($_SESSION['errors'])) {
        $_SESSION['errors'] = null;
       // $delete = session_unset($_SESSION['errors']);
    }

    if (isset($_SESSION['complete'])) {
        $_SESSION['complete'] = null;
      //  $delete = session_unset($_SESSION['complete']);
    }
    
    return $delete;
}
