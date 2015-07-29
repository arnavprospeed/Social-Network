<?php
  $host="localhost";
  $username="social_network";
  $password="secretpassword";
  $db_name="social_network";
  global $connection;
  $connection=mysqli_connect($host,$username,$password,$db_name);
  if(mysqli_connect_errno()){
    die("failed to connect");
  }
  else{

  }
?>
