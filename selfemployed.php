<?php
// Include your database connection configuration here
$host = 'localhost';
$dbname = 'dbalumni';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Prepare the SQL insert statement
        $sql = "INSERT INTO selfemployed (Stud_id, self_employed, motivated, experience, challenges, balance, financial_balance, business_plan, resource, professional, insights)
                VALUES (:Stud_id, :self_employed, :motivated, :experience, :challenges, :balance, :financial_balance, :business_plan, :resource, :professional, :insights)";

        // Bind parameters from the form data
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Stud_id', $_POST['Stud_id']);
        $stmt->bindParam(':self_employed', $_POST['self_employed']);
        $stmt->bindParam(':motivated', $_POST['motivated']);
        $stmt->bindParam(':experience', $_POST['experience']);
        $stmt->bindParam(':challenges', $_POST['challenges']);
        $stmt->bindParam(':balance', $_POST['balance']);
        $stmt->bindParam(':financial_balance', $_POST['financial_balance']);
        $stmt->bindParam(':business_plan', $_POST['business_plan']);
        $stmt->bindParam(':resource', $_POST['resource']);
        $stmt->bindParam(':professional', $_POST['professional']);
        $stmt->bindParam(':insights', $_POST['insights']);

        // Execute the insert query
        $stmt->execute();

        // Redirect to a success page or display a success message
        header("Location: home.php");
        exit();
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>