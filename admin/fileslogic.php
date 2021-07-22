<?php
// connect to the database
$conn = mysqli_connect("localhost","sramphar_admin","monikasingh29","sramphar_dotcode");

$sql = "SELECT * FROM tbl_doc";
$result = mysqli_query($conn, $sql);

$file = mysqli_fetch_assoc($result);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'docupload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $docdesc =  $_POST['description_entered'];
    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','png','jpg'])) {
        echo "File extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO tbl_doc(docname, docid,docdesc) VALUES ('$filename', $size,'$docdesc')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
?>