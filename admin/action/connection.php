<?php
$host = "localhost";
$dbname = "dbalumni";
$username = "root";
$password = "";

try {
    // Create a PDO instance for the first query
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // First Query: Count the number of students
    $query = "SELECT COUNT(*) as COUNT FROM education WHERE educ = 'BSIT'";
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $studentCount = $result['count'];

    // Display the count in the HTML structure
    echo '<div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Number of Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">' . $studentCount . '</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

} catch (PDOException $e) {
    echo "Error in the first query: " . $e->getMessage();
}
?>