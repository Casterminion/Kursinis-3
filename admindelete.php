<?php

include("connection.php");; // Using database connection file here

$usersID = $_GET['usersID']; // get id through query string

$del = mysqli_query($con,"DELETE from users where usersID = '$usersID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:Admin.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}