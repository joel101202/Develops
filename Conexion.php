<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'develops';
try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $error) {
    die('Fallo en la conexion: '.$error->getMessage());
}





?>