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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="./css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.min.css">
    <link rel="stylesheet" href="./css/profile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

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
            </div>
        </div>
    </nav><!-- //NAVBAR -->


    <form action="code.php" method="POST" enctype="multipart/form-data">
        <div class="container-box">
            <div class="mb-3">
                <div class="row justify-content-left">
                    <div class="col-md-6">
                        <div class="step" id="step1">
                            <div class="mb-3 profile-picture">
                                <input type="file" name="upload_image" id="upload_image" accept="image/jpg, image/jpeg, image/png" style="display: none;">
                                <label for="upload_image" class="profile-image-label">
                                    <div class="profile-picture">
                                        <label for="upload_image" class="profile-image-label">
                                            <div class="image-container">
                                                <img id="preview" src="#" alt="Upload">
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
                                <label for="age" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" id="age" value="<?php echo htmlspecialchars($row['age']); ?>" required onfocus="clearValue(this)">
                            </div>
                            <div class="mb-3">
    <label for="email_address" class="form-label">Email Address</label>
    <input type="email_address" name="email_address" class="form-control" id="email_address" value="<?php echo htmlspecialchars($row['email_address']); ?>" required onfocus="clearValue(this)"></div>
                            <div class="mb-3">
                                <p> </p>
                                <label for="civil_status" class="form-label">Civil Status</label>
                                <select name="civil_status" class="form-control" id="civil_status"  value="<?php echo htmlspecialchars($row['civil_status']); ?>" required onfocus="clearValue(this)">
                                    <option value="single" <?php if ($row['civil_status'] === 'single') echo 'selected'; ?>>Single</option>
                                    <option value="married" <?php if ($row['civil_status'] === 'married') echo 'selected'; ?>>Married</option>
                                    <option value="separated" <?php if ($row['civil_status'] === 'separated') echo 'selected'; ?>>Separated</option>
                                    <option value="widowed" <?php if ($row['civil_status'] === 'widowed') echo 'selected'; ?>>Widowed</option>
                                 </select>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" class="form-control" id="gender"  value="<?php echo htmlspecialchars($row['gender']); ?>" required onfocus="clearValue(this)">
                                    <option value="male" <?php if ($row['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                    <option value="female" <?php if ($row['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                 </select>
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
                                    <select name="educ" class="form-control" id="educ"  value="<?php echo htmlspecialchars($row['educ']); ?>" required onfocus="clearValue(this)">
                                    <option value="BSIT" <?php if ($row['educ'] === 'BSIT') echo 'selected'; ?>>BSIT</option>
                                    <option value="TEP" <?php if ($row['educ'] === 'TEP') echo 'selected'; ?>>TEP</option>
                                    <option value="EDUC" <?php if ($row['educ'] === 'EDUC') echo 'selected'; ?>>EDUC</option>
                                 </select>
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
                                    <label for="region" class="form-label">Region</label>
                                    <select name="region" class="form-control" id="region"  value="<?php echo htmlspecialchars($row['region']); ?>" required onfocus="clearValue(this)">
                                    <option value="Region I Ilocos Region" <?php if ($row['region'] === 'Region I  Ilocos Region') echo 'selected'; ?>>Region I – Ilocos Region</option>
                                    <option value="Region II – Cagayan Valley" <?php if ($row['region'] === 'Region II – Cagayan Valley') echo 'selected'; ?>>Region II – Cagayan Valley</option>
                                    <option value="Region III – Central Luzon" <?php if ($row['region'] === 'Region III – Central Luzon') echo 'selected'; ?>>Region III – Central Luzon</option>
                                    <option value="Region IV‑A – CALABARZON" <?php if ($row['region'] === 'Region IV‑A – CALABARZON') echo 'selected'; ?>>Region IV‑A – CALABARZON</option>
                                    <option value="MIMAROPA Region" <?php if ($row['region'] === 'MIMAROPA Region') echo 'selected'; ?>>MIMAROPA Region</option>
                                    <option value="Region V – Bicol Region" <?php if ($row['region'] === 'Region V – Bicol Region') echo 'selected'; ?>>Region V – Bicol Region</option>
                                    <option value="Region VI – Western Visayas" <?php if ($row['region'] === 'Region V – Bicol Region') echo 'selected'; ?>>Region V – Bicol Region</option>
                                    <option value="Region VII – Central Visayas" <?php if ($row['region'] === 'Region VII – Central Visayas') echo 'selected'; ?>>Region VII – Central Visayas</option>
                                    <option value="Region VIII – Eastern Visayas" <?php if ($row['region'] === 'Region VIII – Eastern Visayas') echo 'selected'; ?>>Region VIII – Eastern Visayas</option>
                                    <option value="Region IX – Zamboanga Peninsula" <?php if ($row['region'] === 'Region IX – Zamboanga Peninsula') echo 'selected'; ?>>Region IX – Zamboanga Peninsula</option>
                                    <option value="Region X – Northern Mindanao" <?php if ($row['region'] === 'Region X – Northern Mindanao') echo 'selected'; ?>>Region X – Northern Mindanao</option>
                                    <option value="Region XI – Davao Region" <?php if ($row['region'] === 'Region XI – Davao Region') echo 'selected'; ?>>Region XI – Davao Region</option>
                                    <option value="Region XII – SOCCSKSARGEN" <?php if ($row['region'] === 'Region XII – SOCCSKSARGEN') echo 'selected'; ?>>Region XII – SOCCSKSARGEN</option>
                                    <option value="Region XIII – Caraga" <?php if ($row['region'] === 'Region XIII – Caraga') echo 'selected'; ?>>Region XIII – Caraga</option>
                                    <option value="NCR – National Capital Region" <?php if ($row['region'] === 'NCR – National Capital Region') echo 'selected'; ?>>NCR – National Capital Region</option>
                                    <option value="CAR – Cordillera Administrative Region" <?php if ($row['region'] === 'CAR – Cordillera Administrative Region') echo 'selected'; ?>>CAR – Cordillera Administrative Region</option>
                                    <option value="BARMM – Bangsamoro Autonomous Region in Muslim Mindanao" <?php if ($row['region'] === 'BARMM – Bangsamoro Autonomous Region in Muslim Mindanao') echo 'selected'; ?>>BARMM – Bangsamoro Autonomous Region in Muslim Mindanao</option>
                                 </select>
                                 </div>

                                    <div class="mb-3">
                                        <label for="zipcode" class="form-label">Zip Code</label>
                                        <input type="text" name="zipcode" class="form-control" id="zipcode" value="<?php echo htmlspecialchars($row['zipcode']); ?>" required onfocus="clearValue(this)">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date_created" class="form-label">Date Today</label>
                                        <input type="date" name="date_created" class="form-control" id="date_created" value="<?php echo htmlspecialchars($row['zipcode']); ?>" required onfocus="clearValue(this)">
                                    </div>

                                    <button class="btn btn-secondary prevBtn" type="button">Previous</button>
                                    <button type="submit" name="modal" class="btn btn-danger">Submit</button>


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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Save?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure to save this information?.</div>
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
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap5.min.js"></script>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script>
        function clearValue(input) {
            if (input.getAttribute('data-initial') !== 'true') {
                input.value = ''; // Clear the current value
                input.setAttribute('data-initial', 'true'); // Set a flag to indicate that it has been cleared
            }
        }

        // Add event listeners to all elements with the 'onfocus' attribute
        var elements = document.querySelectorAll('[onfocus]');
        elements.forEach(function(element) {
            element.addEventListener('focus', function() {
                var initialFlag = this.getAttribute('data-initial');
                if (initialFlag === 'true') {
                    this.value = ''; // Clear the value again if the flag is set
                }
            });
        });

        const input = document.querySelector('input[type="file"]');
        const preview = document.getElementById('preview');
        input.addEventListener('change', function() {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            } else {
                preview.src = "#";
            }
        });

        $(document).ready(function() {
            var currentStep = 0; // Start with the first step

            $('.nextBtn').click(function() {
                // Hide the current step
                $('#step' + currentStep).addClass('d-none');

                // Move to the next step
                currentStep++;

                // Show the next step
                $('#step' + currentStep).removeClass('d-none');
            });

            $('.prevBtn').click(function() {
                // Hide the current step
                $('#step' + currentStep).addClass('d-none');

                // Move to the previous step
                currentStep--;

                // Show the previous step
                $('#step' + currentStep).removeClass('d-none');
            });

            // Handle form submission
            $('#stepForm').submit(function(e) {
                e.preventDefault();
                alert('Form submitted successfully!');
                // Add form submission logic here
            });
        });
    </script>
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

                <script>
                    let prevScrollPos = window.pageYOffset;
                    const navbar = document.querySelector('.navbar');

                    window.onscroll = function() {
                        let currentScrollPos = window.pageYOffset;
                        if (prevScrollPos > currentScrollPos) {
                            navbar.style.transform = 'translateY(0)';
                        } else {
                            navbar.style.transform = 'translateY(-100%)';
                        }
                        prevScrollPos = currentScrollPos;
                    }
                </script>
    </footer>
</body>

</html>