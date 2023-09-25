<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="profilestyle.css">
    <title>User Profile</title>
</head>
<style>
    .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

.modal-content {
  background-color: #fff;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  border-radius: 5px;
  width: 60%;
  text-align: center;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.close {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
}
</style>
<body>
    <div class="container">
        <div class="profile">
            <img src="profile-picture.jpg" alt="User Profile Picture">
            <button id="info-button">User Info</button>
        </div>
        <div class="user-info">
        <div id="errorModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Error</h2>
    <p>An error occurred while processing your request.</p>
  </div>
</div>
        </div>
    </div>
    <script>
        function showErrorModal() {
  var modal = document.getElementById("errorModal");
  modal.style.display = "block";

  // Close the modal when the close button or outside of the modal is clicked
  var closeBtn = document.getElementsByClassName("close")[0];
  window.onclick = function (event) {
    if (event.target === modal || event.target === closeBtn) {
      modal.style.display = "none";
    }
  };
}

    </script>
</body>
</html>
