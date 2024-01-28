<?php

session_start();
$insert=true;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<?php



require_once "config.php";
$user=$_SESSION['id'];
if(isset($_POST['date_time'])){

if(!$conn){
die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";

// Collect post variables
$city = $_POST['city'];
$cab_type = $_POST['cab_type'];
$pickup= $_POST['pickup'];
$dropup= $_POST['dropup'];
$date_time = $_POST['date_time'];
$user_id= $_POST['user_id'];
$sql = "SELECT * FROM safar ";

$result= mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
if($_POST['pickup']==$row['pickup'] and $_POST['dropup']==$row['drop_area'])
{
$sql ="INSERT INTO `login`.`detail`(`city`, `cab_type`, `pickup`, `dropup`, `date_time`,`user_id`) VALUES ('$city','$cab_type','$pickup','$dropup','$date_time','$user_id');";

}

}


// echo $sql;

// Execute the query
if($conn->query($sql) == true){
// echo "Successfully inserted";
$insert = true;
}
else{
echo "ERROR: $sql <br> $conn->error";
}


if($_SERVER['REQUEST_METHOD']=="POST")
{

$sql = "SELECT * FROM safar ";

$result= mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){
if($_POST['pickup']==$row['pickup'] and $_POST['dropup']==$row['drop_area'] and $_POST['date_time']==$row['date_time']and $_POST['user_id']==$user)
{
header("location: submit.php");
exit ;
}
}
header("location: submiterror.php");
}

$conn->close();
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>booking cab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <section id="headtitle">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand textbg" href=""><i class="fas fa-map-marked-alt fa-1x"></i> SAFAR Booking</a>
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
            <a class=" nav-link" href="mybooking.php">My Booking</a>
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

  </section>
  <div class="container">
    <h3>BOOK CAB </h3>
    <hr>
    <form action="" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label> choose city </label>
          <select class="form-control" name="city">
            <option selected>Choose...</option>
            <option>Dehradun</option>
            <option>Haridwar</option>
            <option>Rishikesh</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label> choose Cab Type </label>
          <select class="form-control" name="cab_type">
            <option selected>Choose...</option>
            <option>safar mini</option>
            <option>safar plus</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Uttarakhand.</option>
          </select>
        </div>
      </div>

      <div class="form-group ">
        <label for="pickup">Pick-Up Locality / Area</label>
        <select class="form-control" name="pickup">
          <option selected>Choose...</option>
          <option>graphic era</option>
          <option>ISBT</option>
          <option>clock tower</option>
          <option>Miyawala</option>
          <option>Mohkam Pur</option>
          <option>Doiwala</option>
          <option>Jolly Grant</option>
          <option>Rishikesh</option>
        </select>
      </div>
      <div class="form-group ">
        <label for="drop">Drop Locality/Area</label>
        <select class="form-control" name="dropup">
          <option selected>Choose...</option>
          <option>graphic era</option>
          <option>ISBT</option>
          <option>clock tower</option>
          <option>Miyawala</option>
          <option>Mohkam Pur</option>
          <option>Doiwala</option>
          <option>Jolly Grant</option>
          <option>Rishikesh</option>
        </select>
      </div>
      <div class="form-group ">
        <label for="date">time</label>
        <select id="date" class="form-control" name="date_time">
          <option selected>Choose...</option>
          <option>1:00-2:00pm</option>
          <option>7:00-7:20am</option>
          <option>7:30-7:45am</option>
          <option>7:45-8:00am</option>
          <option>8:00-8:20am</option>
          <option>8:15-8:30am</option>
          <option>8:40-8:50am</option>
        </select>
      </div>
      <?php
      echo "<strong>your id is </strong> ".$user;
       ?>
      <div class="form-group">
        <input type="text" class="form-control" name="user_id" placeholder="please enter your id ">
      </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Check me out
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">BOOK NOW</button>
    </form>
</body>

</html>
