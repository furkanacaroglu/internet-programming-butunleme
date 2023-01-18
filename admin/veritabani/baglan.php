<?php
session_start();
$host_name = 'localhost';
$database = 'telekominukasyon'; // Change your database name
$username = 'root'; // Your database user id
$password = 'Zeynep123412'; // Your password

try {
    $database = new PDO(
        "mysql:host=$host_name;dbname=$database;charset=utf8",
        $username,
        $password
    );
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    
} catch (PDOException $e) {
    echo 'Bağlantı hatası: ' . $e->getMessage();
}
?>
