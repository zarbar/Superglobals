<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Book Appointment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Superglobals.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
    <body class="bodycolour">
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
        <div class="container">
            <h2>Book an Appointment</h2>
        </div>
        <br>
    
<form> 
    <div class="col-4">
      <label for="treatmentType">Select Treatment Type:</label>
      <select id="treatmentType" class="form-control">
        <option>Massage</option>
        <option>Facial</option>
        <option>Manicure</option>
      </select>
    </div>
    <br>
    <div class="col-4">
      <label for="treatment">Select Treatment Type:</label>
      <select id="treatment" class="form-control">
        <option>Signature Massage</option>
        <option>Oil Massage</option>
        <option>Specialist Facial</option>
        <option>Superglobals Facial</option>
      </select>
    </div>
    <br>
    <div class="form-group">
       <div class="col-4">
    <label for="date">Select a Date:</label>
    <input type="date" class="form-control" id="date" name="date" required>
       </div>
  </div>
  <div class="form-group">
       <div class="col-4">
    <label for="email">Select a Time:</label>
    <input type="time" class="form-control" id="time" name="time" required>
       </div>
  </div>
    <div class="container">
    <button type="submit" class="btn btn-dark">Book Now</button>
    </div>
    </div>
</form>
<?php
        // put your code here
?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
        
</html>
