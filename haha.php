<?php
session_start();
require_once 'connectiondb.php';

if (isset($_SESSION['Stud_id'])) {
  $Stud_id = $_SESSION['Stud_id'];
} else {
  header("Location: index.php");
  exit;
}

$select1 = $conn->prepare("SELECT a.*, b.* FROM generalinfo a JOIN education b ON a.Stud_id = b.Stud_id WHERE a.Stud_id = ?");
$select1->execute([$Stud_id]);
$row = $select1->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fill Up Form</title>

  <!-- Add your CSS and JavaScript links here -->

  <!-- Bootstrap CSS -->
  <link href="./css/font.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/icon.css">
  <link rel="stylesheet" href="./css/bootstrap5.min.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="./js/jquery-3.6.0.min.js"></script>
  <style>
    /* Your custom CSS here */
  </style>
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
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" id="userLink" data-bs-toggle="modal" data-bs-target="#userModal">User</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /NAVBAR -->

  <!-- MODAL -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
          <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /MODAL -->

  <form>
    <div class="container">
      <div class="profile-header">
        <!-- Your profile header content here -->
      </div>

      <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>

      <div class="profile-nav-info">
        <!-- Your profile information here -->
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
            <!-- Your profile information here -->
          </ul>
          <div class="profile-btn">
            <button class="chatbtn" id="chatBtn"><i></i> Back</button>
            <button class="createbtn" id="Create-post" onclick="window.location.href='profile.php'">
              <i></i> Edit
            </button>
          </div>
        </div>
      </div>

      <div class="right-side">
        <div class="nav">
          <ul>
            <li id="selfemployed" onclick="tabs(0)" class="user-post active">SELFEMPLOYED</li>
            <li id="unemployed" onclick="tabs(1)" class="user-review">UNEMPLOYED</li>
            <li id="employed" onclick="tabs(2)" class="user-setting">EMPLOYED</li>
            <li id="new-item" onclick="tabs(3)" class="new-class">NEW ITEM</li>
          </ul>
        </div>

        <div class="profile-body">
          <div class="profile-posts tab">
            <!-- Self-Employed Form -->
            <form method="POST" action="selfemployed.php">
            <div class="profile-settings tab">
              <div class="step" id="step1">
                <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
                <input type="hidden" name="education_id" class="form-control" id="education_id" value="<?php echo $row['education_id']; ?>" required>
              </div>
              <div class="mb-2">
                <label for="self_employed" class="form-label">1. How long have you been self-employed, and what type of work or business are you engaged in?</label>
                <input type="text" name="self_employed" class="form-control" id="self_employed" required>
              </div>

              <div class="mb-3">
                <label for="motivated" class="form-label">2.What motivated you to become self-employed? (E.g., autonomy, passion, necessity)
                </label>
                <input type="text" name="motivated" class="form-control" id="motivated" required>
              </div>

              <div class="mb-3">
                <label for="experience" class="form-label">3. What are the main advantages you have experienced as a self-employed individual?</label>
                <input type="text" name="experience" class="form-control" id="experience" required>
              </div>

              <div class="mb-3">
                <label for="challenges" class="form-label">4. What are the most significant challenges you face as a self-employed person, and how do you manage them?</label>
                <input type="text" name="challenges" class="form-control" id="challenges" required>
              </div>

              <div class="mb-3">
                <label for="balance" class="form-label">5.How do you maintain a work-life balance as a self-employed individual, and what strategies have worked best for you?</label>
                <input type="text" name="balance" class="form-control" id="balance" required>
              </div>

              <div class="mb-3">
                <label for="financial_balance" class="form-label">6.Have you faced any financial or administrative hurdles unique to self-employment, such as tax issues or access to financing?</label>
                <input type="text" name="financial_balance" class="form-control" id="financial_balance" required>
              </div>

              <div class="mb-3">
                <label for="business_plan" class="form-label">7. Do you have a business plan or strategy for the future of your self-employment? If so, what are your key goals or objectives?</label>
                <input type="text" name="business_plan" class="form-control" id="business_plan" required>
              </div>

              <div class="mb-3">
                <label for="resource" class="form-label">8.Have you utilized any resources or support networks for self-employed individuals, such as business associations or mentorship programs?</label>
                <input type="text" name="resource" class="form-control" id="resource" required>
              </div>

              <div class="mb-3">
                <label for="professional" class="form-label">9.How do you ensure your professional development and stay up-to-date in your field as a self-employed person?</label>
                <input type="text" name="professional" class="form-control" id="professional" required>
              </div>

              <div class="mb-3">
                <p></p>
                <label for="insights" class="form-label">10.What advice or insights would you share with others considering self-employment or those currently self-employed to help them succeed?</label>
                <input type="text" name="insights" class="form-control" id="insights" required>
              </div>
              <button class="btn btn-primary nextBtn" type="submit">Submit</button>
            </div>
          </form>

            <!-- Unemployed Form -->
            <form method="POST" action="unemployed.php">
            <div class="profile-reviews tab">
              <div class="step" id="step1">
                <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
              </div>
              <div class="mb-2">
                <label for="current_unemployed" class="form-label">1. How long have you been unemployed?</label>
                <input type="text" name="current_unemployed" class="form-control" id="current_unemployed" required>
              </div>

              <div class="mb-3">
                <label for="seeking" class="form-label">2.Have you been actively seeking employment during your period of unemployment? YES/ NO / NOT SURE ONLY THE ANSWER
                </label>
                <input type="text" name="seeking" class="form-control" id="seeking" required>
              </div>

              <div class="mb-3">
                <label for="reasons" class="form-label">3. What are the primary reasons for your unemployment?</label>
                <input type="text" name="reasons" class="form-control" id="reasons" required>
              </div>

              <div class="mb-3">
                <label for="challenges" class="form-label">4. Have you encountered any specific challenges or barriers in your job search? If so, please describe.</label>
                <input type="text" name="challenges" class="form-control" id="challenges" required>
              </div>

              <div class="mb-3">
                <label for="status" class="form-label">5. How do you feel your current unemployment status has impacted your mental and emotional well-being?</label>
                <input type="text" name="status" class="form-control" id="status" required>
              </div>

              <div class="mb-3">
                <label for="benefits" class="form-label">6.Are you receiving any form of government assistance or unemployment benefits? If yes, please specify.</label>
                <input type="text" name="benefits" class="form-control" id="benefits" required>
              </div>

              <div class="mb-3">
                <label for="opportunities" class="form-label">7. What types of job opportunities are you actively seeking?</label>
                <input type="text" name="opportunities" class="form-control" id="opportunities" required>
              </div>

              <div class="mb-3">
                <label for="resource" class="form-label">8.What additional support or resources do you believe would be most helpful for you during your job search?</label>
                <input type="text" name="resource" class="form-control" id="resource" required>
              </div>

              <div class="mb-3">
                <label for="pursuing_educ" class="form-label">9.Have you considered pursuing education or training to improve your job prospects? (Yes/No)</label>
                <input type="text" name="pursuing_educ" class="form-control" id="pursuing_educ" required>
              </div>

              <div class="mb-3">
                <p></p>
                <label for="online_job" class="form-label">10.Have you utilized online job search platforms or websites in your job search efforts?</label>
                <input type="text" name="online_job" class="form-control" id="online_job" required>
              </div>
              <button class="btn btn-primary nextBtn" type="submit">Submit</button>
            </div>
          </form>

            <!-- Employed Form -->
            <form method="POST" action="employed.php">

            <div class="step" id="step1">
              <input type="hidden" name="Stud_id" class="form-control" id="Stud_id" value="<?php echo $row['Stud_id']; ?>" required>
              <input type="hidden" name="education_id" class="form-control" id="education_id" value="<?php echo $row['education_id']; ?>" required>
            </div>
            <div class="mb-2">
              <label for="current_job" class="form-label">1. Is your current job full-time or part-time?</label>
              <input type="text" name="current_job" class="form-control" id="current_job" required>
            </div>

            <div class="mb-3">
              <label for="job_title" class="form-label">2.What is your current job title or occupation?
              </label>
              <input type="text" name="job_title" class="form-control" id="job_title" required>
            </div>

            <div class="mb-3">
              <label for="employer" class="form-label">3. How long have you been employed in your current job or position?</label>
              <input type="text" name="employer" class="form-control" id="employer" required>
            </div>

            <div class="mb-3">
              <label for="employer_sector" class="form-label">4. What industry or sector does your current employer operate in?</label>
              <input type="text" name="employer_sector" class="form-control" id="employer_sector" required>
            </div>

            <div class="mb-3">
              <label for="satisfaction" class="form-label">5. Are you satisfied with your current employment situation?</label>
              <input type="text" name="satisfaction" class="form-control" id="satisfaction" required>
            </div>

            <div class="mb-3">
              <label for="career_growth" class="form-label">6. Have you experienced any significant career growth or promotions in the past year?</label>
              <input type="text" name="career_growth" class="form-control" id="career_growth" required>
            </div>

            <div class="mb-3">
              <label for="income" class="form-label">7. What is your approximate annual income from your job (in your local currency)?</label>
              <input type="text" name="income" class="form-control" id="income" required>
            </div>

            <div class="mb-3">
              <label for="experience" class="form-label">8.Have you experienced any significant changes in your employment situation in the past year (e.g., promotion, job loss, change of employer)?</label>
              <input type="text" name="experience" class="form-control" id="experience" required>
            </div>

            <div class="mb-3">
              <label for="traning" class="form-label">9.Are you currently pursuing any further education or training related to your job or career?</label>
              <input type="text" name="traning" class="form-control" id="traning" required>
            </div>

            <div class="mb-3">
              <p></p>
              <label for="factors" class="form-label">10.Do you have any additional comments or thoughts about your current employment situation that you would like to share?</label>
              <input type="text" name="factors" class="form-control" id="factors" required>
            </div>
            <button class="btn btn-primary nextBtn" type="submit">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>