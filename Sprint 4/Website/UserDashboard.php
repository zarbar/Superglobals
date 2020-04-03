<html>
    <head>
        <title>My Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Superglobals.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
    <body class="bodycolour">
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="background-image:linear-gradient(to right,#cc0099,#ffff33)">
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
         <a class="nav-link" href="LandingPage.php">Login/Register</a>
    </li>
  </ul>
    </div>
</nav>
        <div style="padding: 40px" class="containerccolour">
            <h1 align="center">
                Welcome "User"
                
            </h1>
            <div style="padding: 30px" align="center">
                <button type="submit" onclick="window.location.href='BookAppointment.php'" class="btn btn-secondary btn-lg" style="background-image:linear-gradient(to right,#cc0099,#ffff33); width: 30%">Book New Appointment</button>
            </div>
            <div style="padding: 30px" align="center">
                <button type="submit" onclick="window.location.href='CustomerAppointment.php'" class="btn btn-secondary btn-lg" style="background-image:linear-gradient(to right,#cc0099,#ffff33); width: 30%">See My Appointments</button>
            </div>
            <div style="padding: 30px" align="center">
                <button type="submit" onclick="window.location.href='#'" class="btn btn-secondary btn-lg" style="background-image:linear-gradient(to right,#cc0099,#ffff33); width: 30%">Logout</button>
            </div> 
           
            
            
            
            </div>

 <?php
        // put your code here
 ?>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>        

</html>
