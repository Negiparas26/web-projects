<?php

session_start();

// user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password ="";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");

                        }
                    }

                }
    }
}

}



?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>safar_login_page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <section id="headtitle">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand textbg" href=""><i class="fas fa-map-marked-alt fa-1x"></i> SAFAR Login</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mybutton" aria-controls="#mybutton" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mybutton">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">About Us</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link" href="">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <section>
    <center class="log">
      <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
      <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
          <div class="col-md-6 d-none d-md-block">
            <img src="https://www.dreamhouseapartments.com/wp-content/uploads/2019/05/Leisure-Stays-small.png" class="img-fluid" style="min-height:100%;" />
          </div>
          <div class="col-md-6 bg-white p-5">
            <h3 class="pb-3">Login Form</h3>
            <div class="form-style">
              <form action="" method="post">
                <div class="form-group pb-3">
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                </div>
                <div class="form-group pb-3">
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      <span> Rember me</span>
                    </label>
                  </div>
                
                </div>
                <div class="pb-2">
                  <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Submit</button>
                </div>
              </form>
              <div class="sideline"> / </div>
              <div>
                <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2"> Sign Up for DRIVER login</button>
              </div>
              <div class="pt-4 text-center">
                Get Members Benefit. <a href="register.php">Sign Up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </center>
  </section>

</body>

</html>
