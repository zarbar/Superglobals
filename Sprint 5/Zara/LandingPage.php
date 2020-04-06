<html>
    
<head>
        <title>Superglobals Salon Home Page</title>
        <!--- <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Volkhov&display=swap" rel="stylesheet"> -->
        <link href="Superglobals.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   
    <div class="bodystyle1" style="height: 100%; padding:5%">
        <h1 align="center">
            Welcome to the Superglobals Salon
        </h1> 
            
      <p align="center">
                We are a group of software engineering students on a mission<br> to provide a simple way to book your beauty treatments!!
      </p>
      <br>
      <p align="center">
          <button type="submit"onclick="window.location.href='BookAppOrLogin.php'" class="btn btn-primary btn-lg" style="background-image:linear-gradient(to right,#cc0099,#ffff33); border: none">Book Now</button>
      </p>
      <br>
      <div class="container" align="center">
       <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="Images/nails.jpg"alt="Image on Nails being painted">
    </div>
    <div class="carousel-item">
        <img src="Images/exfoliate.jpg" alt="Woman's face is being exfoliated">
    </div>
    <div class="carousel-item">
        <img src="Images/facemassage.jpg" alt="Woman's face is being massaged">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
      
</div>  
      <br>
    </div>

 <?php
 
     if(!empty($_SESSION)){
          // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
     }
 ?>
    
   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
