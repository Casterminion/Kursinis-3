<?php

session_start();

if(isset($_SESSION['usersID']))
{
    unset($_SESSION['usersID']);
}

header("Location: login.php");
die;