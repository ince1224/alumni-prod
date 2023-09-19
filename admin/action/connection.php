<?php
// Database connection parameters
$host = "localhost";
$dbname = "dbalumni";
$username = "root";
$password = "";

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL query to count the number of students
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM generalinfo WHERE user_exists_column = 1"); // Replace 'your_table_name' with the actual table name and 'user_exists_column' with the column that indicates user existence

    // Execute the query
    $stmt->execute();

    // Fetch the count result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Get the count value
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
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>
