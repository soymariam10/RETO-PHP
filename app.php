<?php 
    require 'vendor/autoload.php';
    use Clases\Database;
    $dbCnx = new Database();
    $conn = $dbCnx->getConnection('mysql');
?>