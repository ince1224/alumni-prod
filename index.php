<?php
    session_start();
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
        <div id="errorAlert" class="alert alert-danger alert-dismissible custom-fade" role="alert" style="display: none;">
            <strong>Hey!</strong>
            <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/prostyle.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        </script>
    

    <title>NBSC Alumni</title>
</head>
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm {
        color: #636363;
        width: 325px;
        margin: 30px auto;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -15px;
        width: calc(200% - 81px);
    }

    .modal-confirm .form-control,
    .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -5px;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
    }

    .modal-confirm .icon-box {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -70px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #82ce34;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-confirm .icon-box i {
        font-size: 58px;
        position: relative;
        top: 3px;
    }

    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }

    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #82ce34;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
        width: calc(200% - 81px);
    }

    .modal-confirm .btn:hover,
    .modal-confirm .btn:focus {
        background: #6fb32b;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="img/logov2_adobe_express.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="homeLink">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Join Us
                    </button>
            </div>
        </div>
    </nav>
    <!-- Modal -->
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
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <svg class="svg-icon-envelope" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                            </div>
                            <input type="eaddress" class="form-control" name="eaddress"
                                placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Date of Birth</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                                <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                </svg>
                            </div>
                            <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth">
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


    <!-- modal -->


    <!-- Modal HTML -->

    <!-- HERO -->
    <div class="form-group mb-0">
    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="./img/NBSC BLDG FINAL NO WIRES JPEG.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="./img/cover1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="form-group mb-3">
    </div>
    
    </div>
    <!-- //HERO -->
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
                <h6 class="text-primary">CONTACT</h6>
                <h1>Get In Touch</h1>
                <p>Information</p>
            </div>
        </div>
        <!-- FEATURES -->
        <div class="form-group mb-10">
            <div class="form-group mb-3">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://nbsc.edu.ph/wp-content/uploads/2022/11/Markines-Maria-Theresa-B-117022-150x150.jpg"
                                class="img-fluid rounded-start" alt="...">
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
        
        <script>
            document.getElementById("loginBtn").addEventListener("click", function () {
                // Check if the required fields are empty
                const studentId = document.querySelector('input[name="Stud_id"]').value;
                const firstName = document.querySelector('input[name="first_name"]').value;
                const lastName = document.querySelector('input[name="last_name"]').value;
                const email = document.querySelector('input[name="eaddress"]').value;
                const dob = document.querySelector('input[name="dob"]').value;

                if (!studentId || !firstName || !lastName || !email || !dob) {
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
            let prevScrollPos = window.pageYOffset;
            const navbar = document.querySelector('.navbar');

            window.onscroll = function () {
                let currentScrollPos = window.pageYOffset;
                if (prevScrollPos > currentScrollPos) {
                    navbar.style.transform = 'translateY(0)';
                } else {
                    navbar.style.transform = 'translateY(-100%)';
                }
                prevScrollPos = currentScrollPos;
            }
        </script>
        <script src="./js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./js/bootstrap5.min.js"></script>
        <script src="./js/jquery-3.6.0.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="js/all/index.js"></script>
        </script>
</body>

</html>