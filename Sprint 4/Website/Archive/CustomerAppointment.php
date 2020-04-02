<!DOCTYPE html>

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
   <a class="navbar-brand" href="html.html">
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
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Book</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Treatments.php">Treatments</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Login/Register</a>
    </li>
  </ul>
    </div>
</nav>
    
        <br>
        <div class="container">
            <h2>First Name, Last Name's Appointments</h2>
        </div>
        <br>
 <?php
        // put your code here
?>
<div class="container">
<div class="table-responsive">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Treatment</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Update Appointment</th>
      <th scope="col">Delete Appointment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="#"> <img src="Images/update.png" alt="Update Icon" width="50" height="50"> </a></td>
      <td><a href="#"><img src="Images/delete.png" alt="Delete Icon" width="50" height="50"></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="#"><img src="Images/update.png" alt="Update Icon" width="50" height="50"></a></td>
      <td><a href="#"><img src="Images/delete.png" alt="Delete Icon" width="50" height="50"></a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
      <td><a href="#"><img src="Images/update.png" alt="Update Icon" width="50" height="50"></a></td>
      <td><a href="#"><img src="Images/delete.png" alt="Delete Icon" width="50" height="50"></a></td>
    </tr>
  </tbody>
</table>
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

 
        
        