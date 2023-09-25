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
  <link rel="stylesheet" href="css/home.css">
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

  <form>
    <div class="container">
      <div class="profile-header">
        <div class="profile-img">
          
          <img src="hello" src="<?php echo $row['image']?>" width="200" alt="Profile Image">
          <div>
          </div>
        </div>

        <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
        <div class="profile-nav-info">
          <h3 for="first_name" id="first_name"> <?php echo $row['first_name']; ?></h3>
          <div class="address">
            <p for="address" id="address"><?php echo $row['address']; ?></p>
          </div>

        </div>
        <div class="profile-option">
          <div class="notification">
            <i class="fa fa-bell"></i>
            <span class="alert-message">3</span>
          </div>
        </div>
      </div>

      <div class="main-bd">
        <div class="left-side">
          <div class="profile-side">
            <ul>
              <li for="school" id="school"><?php echo $row['school']; ?></li>
            </ul>
            <ul>
              <li for="educ" id="educ"><?php echo $row['educ']; ?></li>
            </ul>
            <ul>
              <li for="batch" id="batch">Batch:<?php echo $row['batch']; ?></li>
            </ul>
            <ul>
              <li for="telephone_number" id="telephone_number">Phone No: <?php echo $row['telephone_number']; ?></li>
            </ul>
            <ul>
              <li for="email_address" id="email_address">Email: <?php echo $row['email_address']; ?></li>
            </ul>
            <div class="profile-btn">
              <button class="chatbtn" id="chatBtn"><i class="fa fa-comment"></i> Back</button>
              <button class="createbtn" id="Create-post" onclick="window.location.href='profile.php'">
                <i class="fa fa-plus"></i> Edit
              </button>
              </button>
            </div>
            <div class="user-rating">
              <div class="rate">
                <div class="star-outer">
                  <div class="star-inner">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div class="right-side">

          <div class="nav">
            <ul>
              <li onclick="tabs(0)" class="user-post active">EMPLOYED</li>
              <li onclick="tabs(1)" class="user-review">UNEMPLOYED</li>
              <li onclick="tabs(2)" class="user-setting"> SELFEMPLOYED</li>
            </ul>
          </div>
          <form method="post" action="">
            <div class="profile-body">
              <div class="profile-posts tab">
                <div class="container-box">
                  <div class="mb-5">
                    <div class="row justify-content-left">
                      <div class="step" id="step1">
                        <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>

                      </div>
                      <div class="mb-3">
                        <label for="employer" class="form-label">1. How long have you been employed in your current job or position?</label>
                        <input type="text" name="employer" class="form-control" id="employer" required>
                      </div>

                      <div class="mb-3">
                        <label for="employer_sector" class="form-label">2. What industry or sector does your current employer operate in?</label>
                        <input type="text" name="employer_sector" class="form-control" id="employer_sector" required>
                      </div>

                      <div class="mb-3">
                        <label for="satisfaction" class="form-label">3. Are you satisfied with your current employment situation?</label>
                        <input type="text" name="satisfaction" class="form-control" id="satisfaction" required>
                      </div>

                      <div class="mb-3">
                        <label for="career_growth" class="form-label">4. Have you experienced any significant career growth or promotions in the past year?</label>
                        <input type="text" name="career_growth" class="form-control" id="career_growth" required>
                      </div>

                      <div class="mb-3">
                        <p></p>
                        <label for="factors" class="form-label">5. What factors are most important to you in your current job?</label>
                        <input type="text" name="factors" class="form-control" id="factors" required>
                      </div>
                      <button class="btn btn-primary nextBtn" type="button">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="profile-reviews tab">
                <h1>User reviews</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam pariatur officia, aperiam quidem quasi, tenetur molestiae. Architecto mollitia laborum possimus iste esse. Perferendis tempora consectetur, quae qui nihil voluptas. Maiores debitis
                  repellendus excepturi quisquam temporibus quam nobis voluptatem, reiciendis distinctio deserunt vitae! Maxime provident, distinctio animi commodi nemo, eveniet fugit porro quos nesciunt quidem a, corporis nisi dolorum minus sit eaque error
                  sequi ullam. Quidem ut fugiat, praesentium velit aliquam!</p>
              </div>
              <div class="profile-settings tab">
                <div class="account-setting">
                  <h1>Acount Setting</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit omnis eaque, expedita nostrum, facere libero provident laudantium. Quis, hic doloribus! Laboriosam nemo tempora praesentium. Culpa quo velit omnis, debitis maxime, sequi
                    animi dolores commodi odio placeat, magnam, cupiditate facilis impedit veniam? Soluta aliquam excepturi illum natus adipisci ipsum quo, voluptatem, nemo, commodi, molestiae doloribus magni et. Cum, saepe enim quam voluptatum vel debitis
                    nihil, recusandae, omnis officiis tenetur, ullam rerum.</p>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </form>
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