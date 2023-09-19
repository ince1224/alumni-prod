<?php
session_start();
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    ?>
    <div class="alert alert-success alert-dismissible custom-fade" role="alert">
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/prostyles.css">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="prostyles.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <title>NBSC Alumni</title>
</head>

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

                    <form action="code.php" method="POST">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign Up</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <style>
                        .form-group {
                            margin-bottom: 15px;
                            /* Adjust the spacing between form groups */
                        }

                        .input-group-text i {
                            font-size: 2em;
                            /* Adjust the icon size */
                        }
                    </style>

                    <div class="form-group mb-3 input-div">
                        <label>Student ID</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="Stud_id" class="form-control" name="Stud_id" placeholder="Student Id">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>First Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="first_name" class="form-control" name="first_name"
                                placeholder="Enter First Name">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Lastname</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="last_name" class="form-control" name="last_name" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="eaddress" class="form-control" name="eaddress"
                                placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="form-group mb-3 input-div">
                        <label>Date of Birth</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth">
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" name="Login" class="btn btn-primary">Login</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- HERO -->
    <div class="form-group mb-1">
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/all/index.js"></script>
        </script>
</body>

</html>