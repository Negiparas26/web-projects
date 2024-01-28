<?php
// this file contain database configuration assuming you are
// running mysql using user "root "and password ""
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// try to conneting TO THE database
$conn=mysqli_connect($servername,$username,$password,$database);
// check the connection
if ($conn==false){
  die('ERROR:Cannot connect');
}


?>
