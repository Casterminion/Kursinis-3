<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    //something posted
    $usersEmail = $_POST['usersEmail'];
    $usersPassword = $_POST['usersPassword'];

   

    
    if(!empty($usersEmail) && !empty($usersPassword))
    {

        //read from database
        $query = "select * from users where usersEmail = '$usersEmail'";

        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
    
                $user_data = mysqli_fetch_assoc($result);

                // set username in the session
                $_SESSION['usersID'] = $user['usersID'];
                $_SESSION['usersName'] = $name['usersName'];

                                
                // if($user_data['usersPassword'] === $usersPassword)
                // {
                //     $_SESSION['usersID'] = $user_data['usersID'];
                //     header("Location: index.php");
                //     die;
            

                // }


                //read only
                if($user_data["userType"]==="user")
                {	

                    $_SESSION['usersID'] = $user_data['usersID'];
                    header("Location: index.php");
                    die;
                }

                //can add information to site
                elseif($user_data["userType"]==="worker")
                {

                    $_SESSION['usersID'] = $user_data['usersID'];
                    header("Location: worker.php");
                    die;
                }

                //can delete workers
                elseif($user_data["userType"]==="admin")
                {

                    $_SESSION['usersID'] = $user_data['usersID'];
                    header("Location: Admin.php");
                    die;
                }

            }

           
        }
        echo '<script>alert("Wrong email ir password")</script>';                 
    }
    else
    {
        echo "Please enter some valid information!";
    }
}


    // echo "test123";
    // echo "<br>";
    // echo password_hash("test123", PASSWORD_DEFAULT);


    // $input = "test123";
    // $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

    // echo password_verify($input, $hashedPwdInDb);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
</head>
    <body>
    <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
       
            <form method="post">
                <h3>Login Here</h3>
                <p>
                    <input id="text" type="text" name="usersEmail" placeholder="Your email:" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input id="text" type="password" name="usersPassword"  placeholder="Password:"  required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input type="submit" id="login" value="Login">
                    </p>
                    <div class="otherPage">
                    <p  >Not a member? <a href="signup.php">Create Account</a><p>
                    </div>
            </form>



    </body>
</html>
