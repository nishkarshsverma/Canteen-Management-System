<?php
$con=mysqli_connect("localhost","root","","shoopingcart");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
}

// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
  echo "Default database is " . $row[0];
  mysqli_free_result($result);
}

// Change db to "test" db
mysqli_select_db($con, "shoopingcart");

// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
  echo "Default database is " . $row[0];
  mysqli_free_result($result);
}

// Close connection
mysqli_close($con);
?>