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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="./css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/career.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
  <h1>FILL UP THE FORM</h1>

  <form action="">
  <div class="row mb-5"></div>
  <div class="form-group mb-0">
<div class="container">
  <form action=""><!--inspect element on the google form and copy the value for the action attribute--then add it here between the quotes-->
    <div class="row mb-3">
      <div class="col">
        <input name="" type="text" class="form-control" placeholder="First name">
      </div>
      <div class="col">
        <input name="" type="text" class="form-control" placeholder="Last name">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col">
        <input name="" type="email" class="form-control" placeholder="Email Address">
      </div>
      <div class="col">
        <input name="" type="text" class="form-control" placeholder="Company Name">
      </div>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="aboutCompany" placeholder="Tell me about your company"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="companySvcs" placeholder="What specific services does your company provide?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="setApart" placeholder="What sets you apart from your competition?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="targetClient" placeholder="Who is your target client?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="haveWebsite" placeholder="Do you currently have a website? What's your website address?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="keywords" placeholder="What keywords will your audience use to find your website when they do a search?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="websiteLikes" placeholder="What do you like about your existing website?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="whyNew" placeholder="Why do you want a new website?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="webFeatures" placeholder="What features will your new website need?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="webInspo" placeholder="What similar websites do you like, and what is it you like about them?"></textarea>      
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="provideContent" placeholder="Who will provide content for the new website?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="compBranding" placeholder="Tell me a little bit about your company's branding."></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="newURL" placeholder="Do you need a new URL? If so, have you purchased your domain name yet, or will you need assistance with that?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="newHost" placeholder="Are you interested in migrating your site to a new hosting platform?"></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="projectBudget" placeholder="Tell me about your budget for the project."></textarea>
    </div>
    <div class="form-group">
      <textarea name="" type="text" class="form-control" id="ongoingMaint" placeholder="Do you need my help with ongoing maintenance for your new site?"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">SUBMIT</button>
  </form>
</div>
  </form>

  
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/all/index.js"></script>
        
        
        
</body>

</html>