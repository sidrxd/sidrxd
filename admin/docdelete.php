<?php

$mykey1=$_REQUEST['file_id'];
$status='delete';

include 'connect.php';

// sql to delete a record
$conn = mysqli_connect("localhost","sramphar_admin","monikasingh29","sramphar_dotcode");
$sqldel = "DELETE FROM tbl_doc WHERE docid=$mykey1";


mysqli_query($conn,$sqldel);
echo "<script>location.href='viewalldocs.php'</script>"

?> 