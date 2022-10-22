<?php

include("connection.php");; // Using database connection file here

$Author_ID = $_GET['Author_ID']; // get id through query string

$del = mysqli_query($con,"DELETE from author where Author_ID = '$Author_ID'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:uploadAuthor.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>