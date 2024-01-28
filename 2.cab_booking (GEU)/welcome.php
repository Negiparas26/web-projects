
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
            <a class=" nav-link" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="#pricing">Package</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="#testimonials">About Us</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="mybooking.php">My Booking</a>
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

    <section id="title">
      <div class="container-fluid">
        <center>
          <div class="row">
            <div class="top-i col-lg-12 col-m-12">
              <img class="title-img " src="images/BG.jpg" alt="image">
            </div>

            <div class="bgtext top-i  col-lg-6 col-sm-12">
              <h1>Book a City Taxi to your destination in town</h1>
              <h3>Choose from a range of categories and prices..<h3>
                  <a href="#   "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fab fa-apple"></i> Download</button></a>
                  <a href="   "> <button type="button" class=" btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i> Download</button></a>
            </div >
            <div class="container-fluid  col-lg-6 col-sm-3">
          <a href="bookingcab.php "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fas fa-book-open"></i> Book Now <i class="fas fa-arrow-right"></i></button></a>
            </div>
          </div>

        </center>

      </div>

    </section>



  <section id="feature">
    <div class="row">
      <div class=" feature-box col-lg-3">
        <i class="icon fas fa-rupee-sign fa-4x"></i>
        <h3>Best Price Guaranteed</h3>
      </div>
      <div class=" feature-box col-lg-3">
        <i class="icon fas fa-headset fa-4x"></i>
        <h3>24/7 Customer Care</h3>
      </div>
      <div class=" feature-box col-lg-3">
        <i class="icon fas fa-home fa-4x"></i>
        <h3>Home Pickups</h3>
      </div>
      <div class=" feature-box col-lg-3">
        <i class="icon fas fa-calendar-alt fa-4x"></i>
        <h3>Easy Bookings</h3>
      </div>
    </div>
  </section>



  <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active testimonial-img">
          <h2 class="test-text ">For local cabs at cheapest rate you can visit our website for booking online or you can book with our mobile app. <br>Our local cabs rates are pocket friendly for everyone..</h2>
          <img class="testimonials-img  test-img" src="images/Your-payment.jpg" alt="">
        </div>
        <div class="carousel-item ">
          <h2 class="test-text "> safar cab helps you with online cab booking at the best prices, comparatively much lower than the local vendors.</h2>
          <img class="testimonials-img  test-img" src="images/map.jpg" alt="">
        </div>
        <div class="carousel-item">
          <h2 class="test-text ">We take pride in our On-time performance. We understand the importance of your time and money,<br> and we make sure that you reach your destination on time.</h2>
          <img class="testimonials-img" src="images/ontime.jpg" alt="">
        </div>
        <div class="carousel-item">
          <h2 class="test-text ">Secure and Safer Rides Verified drivers, an emergency alert button,<br> and live ride tracking are some of the features that we have in place to ensure you a safe travel experience.</h2>
          <img class="testimonials-img test-img " src="images/secure.jpg" alt="">
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>


  <section id="pricing">
    <div class="pricing-text">
      <h1>ON MY WAY </h1>
      <p>Road Trips is better with safar cab .</p>
      <p>Book a Cab for an Exciting Road Trip.</p>
      <p>Hygiene is the top-most priority for safar cab. That’s why, they ensure that the cab you book is absolutely clean.<br>
        Considering the Covid-19 situation, we ensure that every car is sanitized before the journey and all the safety protocols are followed thoroughly. <br>
        The temperature of drivers is checked before every trip, and wearing masks is mandatory for the passengers as well as drivers.<br></p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 pricing-column">
        <div class="card">
          <div class="card-header">
            <img class=" priceimage" src="images/city.jpg" alt="images">
          </div>
          <div class="card-body">
            <h1>CITY TAXI</h1>
            <p>The perfect way to get through your everyday travel needs.
              City taxis are available 24/7 and you can book and travel in an instant. </p>
            <p>With rides starting from as low as Rs. 6/km, you can choose from a wide range of options! <br>
              You can also opt to do your bit for the environment with safar Share!.!</p>
            <a href="bookingcab.php    "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fas fa-book-open"></i> Book Now <i class="fas fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pricing-column">
        <div class="card">
          <div class="card-header">
            <img class=" priceimage" src="images/images.jpg" alt="images">
          </div>
          <div class="card-body">
            <h1>OUTSTATION</h1>
            <p> Ride out of town at affordable one-way and round-trip fares with safar intercity travel service.</p>
            <p>Choose from a range of AC cabs driven by top partners, available in 1 hour or book upto 7 days in advance.</p>
            <p>We have you covered across India with presence in 90+ cities with over 500 one way routes.</p>
            <a href=" bookingcab.php   "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fas fa-book-open"></i> Book Now <i class="fas fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 pricing-column">
        <div class="card">
          <div class="card-header">
            <img class=" priceimage" src="images/rential.jpg" alt="images">
          </div>
          <div class="card-body">
            <h1>RENTALS</h1>
            <p> With safar Rentals you get a cab at your disposal. So be it a day long business meeting,</p>
            <p> a shopping trip with your friends or just a day out in a new city, we have you covered. </p>
            <p> Packages start at 1 hour and can be extended upto 12 hours!</p>
            <a href=" bookingcab.php "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fas fa-book-open"></i> Book Now <i class="fas fa-arrow-right"></i></button></a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="cta">
    <div class="container">
      <img class=" ctaimg top-i col-lg-12 col-m-6" src="images/my.jpg" alt="images">
      <center>
        <div class="row">
          <div class=" bgtext1 top-i  col-lg-6 col-md-6 col-sm-6 ">
            <h3>Incredible Destinations At Incredible Deals </h3>
            <h4></h4>
            <a href="bookingcab.php  "><button type="button " class="btn btn-dark btn-lg download-button"><i class="fas fa-book-open"></i> Book Now <i class="fas fa-arrow-right"></i></button></a>
          </div>
        </div>
      </center>
    </div>
  </section>



  <footer id="footer">
    <section>
      <div class="footerfont ">
        <div class="row">
          <div class=" feature-box col-lg-3">
            <i class="fas fa-car-side fa-3x"></i>
            <h3>Clean Car</h3>
          </div>
          <div class=" feature-box col-lg-3">
            <i class="fas fa-file-invoice fa-3x"></i>
            <h3>Transparent Billing</h3>
          </div>
          <div class=" feature-box col-lg-3">
            <i class="fas fa-handshake fa-3x"></i>
            <h3>Reliable Service</h3>
          </div>
          <div class=" feature-box col-lg-3">
            <i class="fas fa-user-tie fa-3x"></i>
            <h3>Courteous Driver</h3>
          </div>
        </div>

        <p>TERMS OF USE | PRIVACY POLICY | REFUND POLICY | SERVICE LEVEL AGREEMENT FOR VENDOR / DRIVER | CAREER | MOBILE APP | CONTACT US</p>

      </div>

    </section>


    <i class="social-icon fab fa-facebook"></i>
    <i class="social-icon fas fa-envelope"></i>
    <i class="social-icon fab fa-twitter"></i>
    <i class="social-icon fab fa-linkedin"></i>
    <p> @ copyright 2021 SAFAR</p>


  </footer>

</body>

</html>
