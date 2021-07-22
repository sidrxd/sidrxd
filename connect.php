<?php 
$con = mysqli_connect("localhost","sramphar_admin","monikasingh29");

if (!$con)
{
	echo "connection failed";
  die();
}

mysqli_select_db($con,"sramphar_dotcode");
?>