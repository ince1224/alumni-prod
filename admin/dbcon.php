<?php
$host = 'localhost';
$dbname = 'dbalumni';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
try {
    // Fetch the number of registered users
    $stmt = $pdo->query("SELECT COUNT(*) as userCount FROM generalinfo");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $userCount = $result['userCount'];
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>