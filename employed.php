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
        $sql = "INSERT INTO employed_data (Stud_id, current_job, job_title, employer, employer_sector, satisfaction, career_growth, income, experience, traning, factors)
                VALUES (:Stud_id, :current_job, :job_title, :employer, :employer_sector, :satisfaction, :career_growth, :income, :experience, :traning, :factors)";

        // Bind parameters from the form data
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Stud_id', $_POST['Stud_id']);
        $stmt->bindParam(':current_job', $_POST['current_job']);
        $stmt->bindParam(':job_title', $_POST['job_title']);
        $stmt->bindParam(':employer', $_POST['employer']);
        $stmt->bindParam(':employer_sector', $_POST['employer_sector']);
        $stmt->bindParam(':satisfaction', $_POST['satisfaction']);
        $stmt->bindParam(':career_growth', $_POST['career_growth']);
        $stmt->bindParam(':income', $_POST['income']);
        $stmt->bindParam(':experience', $_POST['experience']);
        $stmt->bindParam(':traning', $_POST['traning']);
        $stmt->bindParam(':factors', $_POST['factors']);

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