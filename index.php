<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
    <div id="errorAlert" class="alert alert-danger alert-dismissible custom-fade">
        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
    unset($_SESSION['status']); // Clear the session message after displaying it
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NBSC Alumni</title>
    <link href="./css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.min.css">
    <link rel="stylesheet" href="./css/tailwind.min.css">
    <link rel="stylesheet" href="./css/pstyle.css">
</head>

<body>
    <title>Navbar</title>
    </head>
    <nav class="nav">
        <div class="container">
        <div class="logo">
    <a href="#">
        <img src="./img/NBSCLOGO.png" alt="Your Logo">
    </a>
</div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="bg-gray-900 text-white">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                    NORTHERN BUKIDNON STATE COLLEGE ALUMNI

                    <span class="sm:block"> </span>
                </h1>


                <div class="mt-8 flex flex-wrap justify-center gap-4">
                <button type="button" class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Join Us
                    </button>
                </div>
            </div>
        </div>
        <!-- modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <form id="signupForm" action="code.php" method="POST">

                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign Up</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group mb-3 input-div">
                        <label>Student ID</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                            </div>
                            <input type="Stud_id" class="form-control" name="Stud_id" placeholder="Student Id">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                            </div>
                            <input type="first_name" class="form-control" name="first_name"
                                placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Lastname</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                            </div>
                            <input type="last_name" class="form-control" name="last_name" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Batch</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</svg>
                            </div>
                            <input type="batch" class="form-control" name="batch"
                                placeholder="Enter Your Batch">
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary nextBtn" id="loginBtn">Login</button>
                </div>
            </div>

        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title">WELCOME!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">You may now proceed.</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="Login" class="btn btn-primary">Login</button>
                </div>
            </div>
        </div>
    </div>

    </form>
        <!-- end modal -->
    </section>
    <section class="home">
    </section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h6 class="text-primary">CONTACT</h6>
                <h1>Get In Touch</h1>
                <p>Information</p>
            </div>
        </div>
        <!-- FEATURES -->
        <div class="form-group mb-0">
            <div class="form-group mb-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://nbsc.edu.ph/wp-content/uploads/2022/11/Markines-Maria-Theresa-B-117022-150x150.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Alumni Affairs / Teaching and Learning Center</h5>
                                <p class="card-text">MARIA THERESA B. MARKINES, Ph.D.</p>
                                <p class="card-text"><small class="text-body-secondary">Director</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <footer>
                    <div class="footer-top">
                        <div class="container">
                            <div class="row gy-4">
                                <div class="col-lg-4">
                                    <img class="" src="" alt="">
                                </div>

                                </ul>
                            </div>
                            <div class="col-lg-2">
                                <h5 class="text-white">More</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Privacy & Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h5 class="text-white">Contact</h5>
                                <ul class="list-unstyled">
                                    <li>Address: NORTHERN BUKIDNON STATE COLLEGE, TANKULAN MANOLO FORTICH BUKIDNON
                                    </li>
                                    <li>Email: NBSC.EDU.PH</li>
                                    <li>Phone: (603) 555-0123</li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>



        <!-- Jquery needed -->
        <script src="./js/3.1.1jquery.min.js"></script>
        <script src="./js/scripts.js"></script>

        <script>
    // Delay in milliseconds before hiding the modal (e.g., 5000ms = 5 seconds)
    const delay = 5000;

    // Function to hide the modal after the specified delay
    function hideModal() {
        // Find the modal element using its x-show attribute
        const modal = document.querySelector('[x-show="modelOpen"]');

        // Change the value of modelOpen to false to hide the modal
        modal.setAttribute('x-show', 'false');
    }

    // Set a timer to automatically hide the modal
    setTimeout(hideModal, delay);
</script>

        <!-- Function used to shrink nav bar removing paddings and adding black background -->
        <script>
            document.getElementById("loginBtn").addEventListener("click", function() {
                // Check if the required fields are empty
                const studentId = document.querySelector('input[name="Stud_id"]').value;
                const firstName = document.querySelector('input[name="first_name"]').value;
                const lastName = document.querySelector('input[name="last_name"]').value;
                const batch = document.querySelector('input[name="batch"]').value;


                if (!studentId || !firstName || !lastName || !batch) {
                    alert("Please fill in all the required fields.");
                } else {
                    const accountExists = true; // Replace this with your actual check

                    if (accountExists) {
                        // Hide the first modal
                        $("#staticBackdrop").modal("hide");

                        // Show the second modal
                        $("#myModal").modal("show");
                    } else {
                        // Display an alert message for non-existing accounts.
                        alert($_SESSION['status']);
                    }
                }
            });
        </script>
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>

        <script>
            $('.navTrigger').click(function() {
                $(this).toggleClass('active');
                console.log("Clicked menu");
                $("#mainListDiv").toggleClass("show_list");
                $("#mainListDiv").fadeIn();

            });
        </script>
        <script src="./js/3.1.1jquery.min.js"></script>
        <script src="./js/umd/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap5.min.js"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="js/all/index.js"></script>
        </script>
</body>

</html>