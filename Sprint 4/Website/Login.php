<!DOCTYPE html>
<!DOCTYPE html>

<html>
    <head>
        <title>Login into Account</title>
        <meta charset="UTF-8">
        <link href="Superglobals.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

 <body class="bodycolour">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="LandingPage.php">
       <img src="Images/SG.png" alt="Logo" style="width:40px;">
  </a>
        
   <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="LandingPage.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="BookAppORLogin.php">Book</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="AboutPage.php">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Treatments.php">Treatments</a>
    </li>
     <li class="nav-item">
         <a class="nav-link" href="BookAppORLogin.php">Login/Register</a>
    </li>
  </ul>
    </div>
</nav>
     <br>

    <div class="container">
        <div class="container">
            <h2>My Account</h2>
        </div>
        <br>   
   <form action="/action_page.php" class="needs-validation" novalidate>
    <div class="form-group">
    <div class="col-5">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" placeholder="Please enter your username" name="uname" required>
    </div>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  <div class="form-group">
      <div class="col-5">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Please enter your password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
      </div>
  </div>
  <div class="container">
  <button type="Login" onclick="window.location.href='UserDashboard.php'"class="btn submitbutton">Submit</button>
  </div>
    <br>
    <div class="container">
       <a href="#" alt="Forgotten your Username?">Forgotten your Username?</a>
    </div>
    <div class="container">
       <a href="#" alt="Forgotten your Password?">Forgotten your Password?</a>
    </div>
</form>
</div>
        
<?php
        // put your code here
?>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
