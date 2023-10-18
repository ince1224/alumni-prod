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
        $sql = "INSERT INTO unemployed_data (Stud_id, current_unemployed, seeking, reasons, challenges, status, benefits, opportunities, resource, pursuing_educ, online_job)
                VALUES (:Stud_id, :current_unemployed, :seeking, :reasons, :challenges, :status, :benefits, :opportunities, :resource, :pursuing_educ, :online_job)";

        // Bind parameters from the form data
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Stud_id', $_POST['Stud_id']);
        $stmt->bindParam(':current_unemployed', $_POST['current_unemployed']);
        $stmt->bindParam(':seeking', $_POST['seeking']);
        $stmt->bindParam(':reasons', $_POST['reasons']);
        $stmt->bindParam(':challenges', $_POST['challenges']);
        $stmt->bindParam(':status', $_POST['status']);
        $stmt->bindParam(':benefits', $_POST['benefits']);
        $stmt->bindParam(':opportunities', $_POST['opportunities']);
        $stmt->bindParam(':resource', $_POST['resource']);
        $stmt->bindParam(':pursuing_educ', $_POST['pursuing_educ']);
        $stmt->bindParam(':online_job', $_POST['online_job']);

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