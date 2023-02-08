<?php
//Conexión con la base de datos
$server = '127.0.0.1';
$username = 'root';
$password = '0Lucifer';
$database = 'proyectoDawSql';
$db = mysqli_connect($server,$username,$password,$database);


/*Comprobar si hay conexion

if(mysqli_connect_errno()){

    echo "Error en la conexión de la bd".mysqli_connect_error();

}else{

    echo "Conexión establecida";
}
*/


//Consulta codificacion caracteres

mysqli_query($db,"SET NAMES 'utf8'");


//Inicia la sesión

session_start();