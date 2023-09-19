<?php
session_start();


//civil and gender//generalinfo


$con = new PDO("mysql:host=localhost;dbname=dbalumni", "root", "");

if (isset($_POST['submit_general_info'])) {
    $Stud_id = $_POST['Stud_id'];
    $school = $_POST['school'];
    $educ = $_POST['educ'];
    $start_year = $_POST['start_year'];
    $end_year = $_POST['end_year'];
    $civil_status = $_POST['civil_status'];
    $gender = $_POST['gender'];
    $telephone_number = $_POST['telephone_number'];
    $address = $_POST['address'];
    $province = $_POST['province'];
    $zipcode = $_POST['zipcode'];
    $batch = $_POST['batch'];

    try {
        // Update education and generalinfo tables with a JOIN on Stud_id
        $query = "UPDATE education AS b
                  JOIN generalinfo AS a ON b.Stud_id = a.Stud_id
                  SET b.school=:school, b.educ=:educ, b.start_year=:start_year, b.end_year=:end_year,
                      a.civil_status=:civil_status, a.gender=:gender, a.telephone_number=:telephone_number,
                      a.address=:address, a.province=:province, a.zipcode=:zipcode, a.batch=:batch
                  WHERE a.Stud_id=:Stud_id";
        $statement = $con->prepare($query);

        $data = [
            ':school' => $school,
            ':educ' => $educ,
            ':start_year' => $start_year,
            ':end_year' => $end_year,
            ':civil_status' => $civil_status,
            ':gender' => $gender,
            ':telephone_number' => $telephone_number,
            ':address' => $address,
            ':province' => $province,
            ':zipcode' => $zipcode,
            ':batch' => $batch,
            ':Stud_id' => $Stud_id
        ];

        $query_execute = $statement->execute($data);
        
        redirectToAnotherPage("Update Success", "home.php");
        if ($query_execute) {
            session_start();
            $_SESSION['status'] = "Update Success";
            header('location: index..php');
            exit;

            
        } else {
            session_start();
            $_SESSION['status'] = "Query Error";
            header('location: index.php');
            exit;
        }
    } catch (PDOException $e) {
        // Handle the database error here, e.g., log it or display an error message
        echo "Error: " . $e->getMessage();
    }
}
//update
$connection = mysqli_connect('localhost', 'root', '', 'dbalumni');

function redirectToAnotherPage($message, $page)
{
    $_SESSION['status'] = $message;
    header("location: $page");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredStudId = $_POST['Stud_id'];

    // Store the entered Stud_id in the session
    $_SESSION['Stud_id'] = $enteredStudId;

    // Redirect to the next page

}

if (isset($_POST['Login'])) {
    try {
        $conn = new PDO("mysql:host=localhost;dbname=dbalumni", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $Stud_id = isset($_POST['Stud_id']) ? $_POST['Stud_id'] : '';

        $select_query = "SELECT * FROM `generalinfo` WHERE `Stud_id` = :Stud_id";
        $statement = $conn->prepare($select_query);
        $statement->bindParam(':Stud_id', $Stud_id, PDO::PARAM_STR);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Data matches, retrieve the existing data
            $retrievedfirst_name = $row['first_name'];
            $retrievedlast_name = $row['last_name'];
            $retrievedEmail = $row['email_address'];
            $retrievedDOB = $row['date_of_birth'];

            // Call the function to redirect with message and destination page
            redirectToAnotherPage("Data Exists", "profile.php");
        } else {
            $_SESSION['status'] = "Data Not Exists"; // Set error message
            header('location: index.php');
            exit;
        }
    } catch (PDOException $e) {
        // Handle the database error here, e.g., log it or display an error message
        echo "Error: " . $e->getMessage();
    } finally {
        $conn = null; // Close the PDO connection
    }
}

?>
