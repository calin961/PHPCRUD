<?php

$host = 'localhost';
$db = 'phpcrud';
$user = 'root';
$pass = '';


try{
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    
}catch(PDOException $e){
    echo 'error'.$e->getMessage();
}