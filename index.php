<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Restaurant Website</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include jQuery -->

  <!-- Include jQuery Confirm plugin CSS -->
  <link rel="stylesheet" href="jquery-confirm.min.css">


  <!-- Include jQuery Confirm plugin JavaScript -->
  <script src="jquery-confirm.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <?php
    // Include the modified PHP script here
    ?>
  </head>
  <body>
    
    
  <nav>
    <ul class="nav-flex-row">
      <li class="nav-item">
        <a href="About.html">About</a>
      </li>
      <li class="nav-item">
        <a href="#menu">Menu</a>
      </li>
      <li class="nav-item">
        <a href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a id="signupButton" href="Signup.html">Signup</a>
      </li>
      <li class="nav-item">
        <a id="Loginbtn" href="Login.html">login</a>
      </li>
      <li class="nav-item">
        <a id="Logoutbtn" href="Logout.php">Logout</a>
      </li>
    </ul>
  </nav>
<div id="result"></div>

  <section class="section-intro">
    <header>
      <h1>Forno</h1>
    </header>
    <div class="link-to-book-wrapper">
      <a id="book" class="link-to-book" href="Reservation.html">Book a table</a>
    </div>
  </section>

  <section class="about-section">
    <article>
      <h3>
         Why Forno 
      </h3>
      <p class="p-5">
        At Forno, we believe in the transformative power of the kitchen  - a place where raw ingredients are transformed into culinary masterpieces, where flavors dance and memories are created. The name "Forno" stems from the Italian word for oven, symbolizing the heart of the culinary experience
      </p>
    </article>
  </section>

 

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/rachel-park-hrlvr2ZlUNk-unsplash.jpg" class="d-block w-100" alt="food">
      </div>
      <div class="carousel-item">
        <img src="img/lily-banse--YHSwy6uqvk-unsplash.jpg" class="d-block w-100" alt="food">
      </div>
      <div class="carousel-item">
        <img src="img/brooke-lark-aGjP08-HbYY-unsplash.jpg" class="d-block w-100" alt="food">
      </div>
      <div class="carousel-item">
        <img src="img/brooke-lark-M4E7X3z80PQ-unsplash.jpg" class="d-block w-100 " alt="food">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <div class="row-flex">
      <div class="flex-column-form">
        <h3>
          Make a booking
        </h3>
      <form class="media-centered" id="reservationForm" method="POST" action="">
          <div class="form-group">
            <p>
              Please leave your number we will call to make a reservation
            </p>
            <input type="name" class="form-control" name="name" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" name="phoneNumber" id="exampleInputphoneNumber1" placeholder="Enter your phone number">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="opening-time">
        <h3>
          Opening times
        </h3>
        <p>
         <span>Monday—Thursday: 09:00 — 23:00</span> 
         <span>Friday—Saturday: 11:00 — 22:00 </span>
         <span>Sunday: 10:00 — 17:00</span>
        </p>
      </div>
      <div class="contact-adress">
        <h3>
          Contact
        </h3>
        <p>
          <span>01021421628</span>
          <span>DownTown</span>
          <span>37 Al Raeeis Abd Al Salam Aref , Cairo Governorate 11613</span>
        </p>
      </div>
    </div>
    </div>


    
<script>
  $(document).ready(function () {
    // Check if the user has a cookie
    var userCookie = getCookie("username");

    if (userCookie) {
      // User is logged in, hide the signup button
     
      $("#signupButton").hide();
      $("#Loginbtn").hide();
    }else{
      $("#Logoutbtn").hide();
    }
    $("#book").on("click", function (event) {
      // Prevent the default link behavior
      event.preventDefault();

      // Check if the user is logged in
      if (userCookie) {
        // User is logged in, proceed with the booking logic here
      window.location.href = "Reservation.html";
      } else {
        // User is not logged in, show a message or redirect to the login page
        Swal.fire('Login Required', 'Please log in to book a table.', 'info');
      }})
  });

  // Function to get the value of a cookie
  function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');

    for (var i = 0; i < cookieArray.length; i++) {
      var cookie = cookieArray[i];
      while (cookie.charAt(0) === ' ') {
        cookie = cookie.substring(1);
      }
      if (cookie.indexOf(name) === 0) {
        return cookie.substring(name.length, cookie.length);
      }
    }

    return null;
  }
  $(document).ready(function () {
        // Handle logout when the button is clicked
        $('#Logoutbtn').on('click', function () {
            // Make an AJAX request to logout.php
            $.ajax({
                url: 'Logout.php',
                method: 'GET',
                success: function () {
                    // Redirect to the home page or login page after successful logout
                    window.location.href = 'index.php';
                },
                error: function () {
                    console.error('Failed to logout.');
                }
            });
        });
    });
  $(document).ready(function () {
        // Use jQuery AJAX to load the content of file.php
        $.ajax({
            url: 'check.php',
            method: 'GET',
            dataType: 'json',
            success: function (response) {
                // Display the content in a jQuery Confirm dialog 
                //formSubmitted = true; // Set the formSubmitted variable to true
                if (response.status === 'success') {
                      Swal.fire('Success', response.message, 'success');
            }}
        });
    });
    $(document).ready(function () {
      // Your other scripts
      

      // Example: Hide the signup button when the document is ready
      
  
      // Variable to track if the form has been submitted
      var formSubmitted = false;
  
      // Event listener for the form submission
      $('button.btn').on('click', function (event) {
          // Prevent the default form submission behavior
          event.preventDefault();
  
          // Retrieve form data
          var formData = {
              name: $('#exampleInputName1').val(),
              phoneNumber: $('#exampleInputphoneNumber1').val()
          };
  
          // Perform AJAX request to submit.php
          $.ajax({
              type: 'POST',
              url: 'submit.php',
              data: formData,
              dataType: 'json',
              success: function (response) {
                  formSubmitted = true; // Set the formSubmitted variable to true
                  if (response.status === 'success') {
                      Swal.fire('Success', response.message, 'success');
                      // Additional logic after successful form submission
                  } else {
                      Swal.fire('Error', response.message, 'error');
                  }
              },
              error: function () {
                  Swal.fire('Error', 'An error occurred during form submission.', 'error');
              }
          });
      });
  
      // Check if the user is already logged in
      
  }); 
</script>  

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
  </body>
  
</html> 