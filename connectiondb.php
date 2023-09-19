<?php


// if(session_status() === PHP_SESSION_NONE){
//     session_start()
// }
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbalumni";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }