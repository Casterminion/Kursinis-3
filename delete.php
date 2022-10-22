<?php

include("connection.php");; // Using database connection file here

$Book_ID = $_GET['Book_ID']; // get id through query string

$del = mysqli_query($con,"DELETE from books where Book_ID = '$Book_ID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:worker.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>