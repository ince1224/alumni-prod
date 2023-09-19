<?php
session_start();
require_once 'connectiondb.php';
if (isset($_SESSION['Stud_id'])) {
    // Redirect back to the form page if Stud_id is not set
    $Stud_id = $_SESSION['Stud_id'];
} else {
    header("Location: index.php");
    exit;
}
$select1 = $conn->prepare("SELECT a.*,b.* FROM generalinfo a JOIN education b on a.Stud_id=b.Stud_id WHERE a.Stud_id = ?");
$select1->execute([$Stud_id]);
$row = $select1->fetch();
// var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Up Form</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/prostyle.css">
    </style>

</head>

<body>
    </nav>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
        <a class="navbar-brand" href="index.php">
                <img class="logo" src="img/logov2_adobe_express.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="userLink" data-bs-toggle="modal" data-bs-target="#userModal">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- //NAVBAR -->

    
    <form action="code.php" method="POST">
        <div class="container-box">
            <div class="mb-3">
                <div class="row justify-content-left">
                    <div class="col-md-6">


                        <div class="step" id="step1">
                            <div class="mb-3 profile-picture">
                                <input type="file" name="profile_picture" id="file-input" style="display: none;">
                                <label for="file-input" class="profile-image-label">
                                    <div class="profile-picture">
                                        <label for="file-input" class="profile-image-label">
                                            <div class="image-container">
                                                <img id="preview" src="#" alt="Edit Image">
                                            </div>
                                        </label>
                                    </div>
                                </label>
                            </div>
                            <div class="center-container">
                                <span style="font-weight:bold;">Edit Your Profile</span>
                            </div>

                            <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $row['first_name']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="middlename" class="form-label">Middle Name</label>
                                <input type="text" name="middlename" class="form-control" id="middlename" value="<?php echo $row['middlename']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" value="<?php echo $row['last_name']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="date_of_birth" class="form-label">Birthdate</label>
                                <input type="text" name="date_of_birth" class="form-control" id="date_of_birth" value="<?php echo $row['date_of_birth']; ?>" disabled>
                            </div>
                            <div class="mb-3">
                                <p> </p>
                                <label for="civil_status" class="form-label">Civil Status</label>
                                <input type="text" name="civil_status" class="form-control" id="civil_status" value="<?php echo htmlspecialchars($row['civil_status']); ?>" required onfocus="clearValue(this)">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <input type="text" name="gender" class="form-control" id="gender" value="<?php echo htmlspecialchars($row['gender']); ?>" required onfocus="clearValue(this)">
                            </div>
                            <button class="btn btn-primary nextBtn" type="button">Next</button>
                        </div>

                        <div>
                            <div class="mb-3">
                            </div>
                            <div class="step d-none" id="step2">

                                <h3>YOUR MOST RECENT UP DEGREE/CERTIFICATE</h3>


                                <p>.</p>
                                <div class="mb-3">
                                    
                                    <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
                                    <div class="mb-3">
                                    <label for="batch" class="form-label">Batch</label>
                                    <input type="text" name="batch" class="form-control" id="batch" value="<?php echo htmlspecialchars($row['batch']); ?>" required onfocus="clearValue(this)">
                                </div>
                                    <label for="school" class="form-label">College,School, or
                                        Institute</label>
                                    <input type="text" name="school" class="form-control" id="school" value="<?php echo htmlspecialchars($row['school']); ?>" required onfocus="clearValue(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="educ" class="form-label">Degree/Certificate &
                                        Major</label>
                                    <input type="text" name="educ" class="form-control" id="educ" value="<?php echo htmlspecialchars($row['educ']); ?>" required onfocus="clearValue(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="start_year" class="form-label">Year Started</label>
                                    <input type="date" name="start_year" class="form-control" id="start_year" value="<?php echo htmlspecialchars($row['start_year']); ?>" required onfocus="clearValue(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="end_year" class="form-label">Year Graduated</label>
                                    <input type="date" name="end_year" class="form-control" id="end_year" value="<?php echo htmlspecialchars($row['end_year']); ?>" required onfocus="clearValue(this)">
                                    <div class="mb-3">
                                    </div>
                                    <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                                    <button class="btn btn-primary nextBtn" type="button">Next</button>
                                </div>

                                <div class="mb-3">
                                </div>
                            </div>
                            <div class="step d-none" id="step3">
                                <h3>CONTACT INFORMATION</h3>
                                <p></p>
                                <div class="mb-3">
                                    <label for="telephone_number" class="form-label">Phone Number</label>
                                    <input type="text" name="telephone_number" class="form-control" id="telephone_number" value="<?php echo htmlspecialchars($row['telephone_number']); ?>" required onfocus="clearValue(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Permanent Address</label>
                                    <input type="text" name="address" class="form-control" id="address" value="<?php echo htmlspecialchars($row['address']); ?>" required onfocus="clearValue(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="province" class="form-label">State/Provice/City</label>
                                    <input type="text" name="province" class="form-control" id="province" value="<?php echo htmlspecialchars($row['province']); ?>" required onfocus="clearValue(this)">
                                    <div class="mb-3">
                                        <label for="zipcode" class="form-label">Zip Code</label>
                                        <input type="text" name="zipcode" class="form-control" id="zipcode" value="<?php echo htmlspecialchars($row['zipcode']); ?>" required onfocus="clearValue(this)">
                                    </div>

                                    <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                                    <button type="submit" name="modal" class="btn btn-danger">Sudmit</button>
                                    
                                    
                                    <div class="mb-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
    </div>
    <!-- User Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary prevBtn" data-bs-dismiss="modal">cancel</button>
                    <button type="submit" name="submit_general_info" class="btn btn-primary nextBtn" data-bs-dismiss="modal">save</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <script>
    // Add an event listener to the "Submit" button
    const submitButton = document.querySelector('[name="modal"]');
    
    submitButton.addEventListener('click', function(event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Show the modal
        const userModal = new bootstrap.Modal(document.getElementById('userModal'));
        userModal.show();
    });
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/all/index.js"></script>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                </div>
                <div class="col-lg-2">
                    <h5 class="text-white">More</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Privacy & Policy</a></li>
                    </ul>
                </div>

                <h5 class="text-white">Contact</h5>
                <ul class="list-unstyled">
                    <li>Address: NORTHERN BUKIDNON STATE COLLEGE, TANKULAN MANOLO FORTICH BUKIDNON</li>
                    <li>Email: NBSC.EDU.PH</li>
                    <li>Phone: (603) 555-0123</li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                </div>
    </footer>
</body>

</html>