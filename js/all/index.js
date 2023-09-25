// index //

$(document).ready(function() {
    // Check if the alert is already visible
    if ($(".alert-success.custom-fade").is(":visible")) {
        // Hide the alert
        $(".alert-success.custom-fade").fadeOut(800, function() {
            // After hiding, display the new alert
            showNewAlert();
        });
    } else {
        // If the alert is not visible, display the new alert
        showNewAlert();
    }

    function showNewAlert() {
        // Display the new alert with fade-in animation
        $(".alert-success.custom-fade").addClass("show");
    }
});

$(document).ready(function() {
    // Function to start the carousel when returning to the home page
    function startHomeCarousel() {
        $('#homeCarousel').carousel('cycle');
    }

    // Call the function when the page is loaded
    startHomeCarousel();
});
// home.php script //

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

  $(document).ready(function() {
    var currentStep = 1;

    $('.nextBtn').click(function() {
      // Scroll to the top of the page smoothly
      $('php, body').animate({
        scrollTop: 0
      }, 100); // You can adjust the scroll duration (in milliseconds) as needed

      // Hide the current step and show the next step
      $('#step' + currentStep).addClass('d-none');
      currentStep++;
      $('#step' + currentStep).removeClass('d-none');
    });

    $('.prevBtn').click(function() {
      $('#step' + currentStep).addClass('d-none');
      currentStep--;
      $('#step' + currentStep).removeClass('d-none');
    });

    $('#stepForm').submit(function(e) {
      e.preventDefault();
      alert('Form submitted successfully!');
      // Add form submission logic here
    });
  });

  $(".nav ul li").click(function() {
    $(this)
      .addClass("active")
      .siblings()
      .removeClass("active");
  });

  const tabBtn = document.querySelectorAll(".nav ul li");
  const tab = document.querySelectorAll(".tab");

  function tabs(panelIndex) {
    tab.forEach(function(node) {
      node.style.display = "none";
    });
    tab[panelIndex].style.display = "block";
  }
  tabs(0);
  

//   profile script //



      
