<?php

session_start();


    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        //something posted
        $usersName = $_POST['usersName'];
        $usersLastName = $_POST['usersLastName'];
        $usersEmail = $_POST['usersEmail'];
        $usersPhone = $_POST['usersPhone'];
        $hashToStoreInDb = password_hash($_POST['usersPassword'], PASSWORD_DEFAULT);




        if(!empty($usersName) && !empty($usersLastName) && !empty($usersEmail) && !empty($usersPhone) && !empty($hashToStoreInDb) && 
        !is_numeric($usersName) && !is_numeric($usersLastName) && is_numeric($usersPhone))
        {

            //save to database
            $usersID = random_num(20);
            $query = "insert into users ( usersID, usersName, usersLastName, usersEmail, usersPhone, usersPassword) values ( '$usersID' , '$usersName' , '$usersLastName' , '$usersEmail' , '$usersPhone' , '$hashToStoreInDb')";
            
            mysqli_query($con, $query);

            header("Location: login.php");
 
            die;


        }
        else
        {
            echo '<script>alert("Phone number can only be made of numbers!")</script>';
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MPI</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>




    <!-- Form starts there -->
    <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="post">
        <h3>Sign up Here</h3>
                    <p>
                    <input for="username" id="usersName" type="text" name="usersName" placeholder="First name" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input for="usersLastName" id="usersLastName" type="text" name="usersLastName" placeholder="Last name" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input for="usersEmail" id="usersEmail" type="text" name="usersEmail" placeholder="Email" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input for="usersPhone" id="usersPhone" type="text" name="usersPhone" placeholder="Phone Number" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input id="password" type="password" name="usersPassword"  placeholder="Password"  required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input type="submit" id="login" value="Sign up" name="register">
                    </p>
            <p>Have an account? <a href="login.php">login</a><p>

            </form>
</body>
</html>