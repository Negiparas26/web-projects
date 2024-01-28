
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>with_Safar_cab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="images/alphabet.png">
</head>

<body>
  <section id="headtitle">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
      <img class="logo nav-link navbar-brand" src="images/alphabet.png" alt="image">
      <a class="navbar-brand textbg" href=""><i class="fas fa-map-marked-alt fa-1x"></i> SAFAR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mybutton" aria-controls="#mybutton" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mybutton">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" nav-link" href="welcome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">Package</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">About Us</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">My Booking</a>
          </li>
        </ul>
        <ul class="navbar-nav  ml-auto">
          <li class="nav-item">
            <a class=" nav-link " href="logout.php"><button type="button" class=" bgbutton btn btn-dark btn-sm download-button">Logout</button></a>
          </li>
        </ul>

        <div class="navbar-collapse collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  </section>
  <selection>
    <center>
      <div class="col-md-6 col-sm-6">
        <img class="col-md-6 col-sm-6 " src="" alt="">
      </div>
      <div class="">
        <h1 class="display-3">error! something went wrong</h1>
        <p class="lead"> please fill the valid detail.... Cab has not been booked....please try again</p>
        <p class="">
          <a class=" nav-link " href="bookingcab.php"><button type="button" class=" btn   btn-primary btn-sm download-button">Continue to booking</button></a>
        </p>
      </div>
    </center>
  </selection>


</body>

</html>
