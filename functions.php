<?php

function is_user_logged_in(): bool
{
    
    return isset($_SESSION['usersID']);
}

function require_login(): void
{
    if (!is_user_logged_in()) {
        header("Location:Login.php");
    }
}

function check_login($con)
{

    if(isset($_SESSION['usersID']))
    {

        $id = $_SESSION['usersID'];
        $query = "select * from users where usersID = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login

    header("Location: login.php");
    die;

}




function random_num($lenght)
{

    $text = "";

    if($lenght < 5)
    {
        $lenght = 5;

    }

    $len = rand(4, $lenght);

    for ($i=0; $i > $len; $i++)
    {

        $text .= rand(0,9);
    }

    return $text;
}
