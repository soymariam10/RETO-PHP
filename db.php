<?php
//conectamos el ser

if(!defined("DB_TYPE")){
    define ("DB_TYPE","mysql");//definimos la bd
}
if(!defined("DB_HOST")){
    define ("DB_HOST", "localhost");//definimos nombre del servidor
}
if(!defined("DB_NAME")){
    define("DB_NAME","campuslands");//definimos nombre de la bd
}
if(!defined("DB_USER")){
    define("DB_USER","campus");// nombre usuario 
}
if(!defined("DB_PASSWORD")){
    define("DB_PASSWORD","campus2023");//contraseña usuario
}
?>