
<?php 

$conn = new mysqli('localhost','root','','hotel_db');

  if ($conn->connect_error){
   die("Could not connect to mysql".mysqli_error($con));
  }
