<?php 
$con = mysqli_connect("localhost","sramphar_admin","monikasingh29");

if (!$con)
{
  die();
}

// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
 // echo "Default database is " . $row[0];
  mysqli_free_result($result);
}

// Change db to "test" db
mysqli_select_db($con, "sramphar_dotcode");

// Return name of current default database
if ($result = mysqli_query($con, "SELECT DATABASE()")) {
  $row = mysqli_fetch_row($result);
  //echo "Default database is " . $row[0];
  mysqli_free_result($result);
}
?>