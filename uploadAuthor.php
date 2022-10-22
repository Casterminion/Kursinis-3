<?php

session_start();

include("connection.php");
include("functions.php");
require_login();


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        //something posted
        $Author_name = $_POST['Author_name'];
        $Author_born = $_POST['Author_born'];
        $Author_describtion = $_POST['Author_describtion'];




        if(!empty($Author_name) && !empty($Author_born) && !empty($Author_describtion))
        {

            //save to database
           
            $query = "insert into author (Author_name, Author_born, Author_describtion) values ('$Author_name' , '$Author_born' , '$Author_describtion')";
            
            mysqli_query($con, $query);

            header("Location: uploadAuthor.php");
 
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

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/tradingBooks.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>


</head>

<body>

<nav class="navbar"></nav>

   <!-- Form starts there -->
   <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="post">
        <h3>Add new author</h3>
                    <p>
                    <input for="Author_name" id="Author_name" type="text" name="Author_name" placeholder="Author_name" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input for="Author_born" id="Author_born" type="text" name="Author_born" placeholder="Author_born" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input for="Author_describtion" id="Author_describtion" type="text" name="Author_describtion" placeholder="Author_describtion" required><i class="validation"><span></span><span></span></i>
                    </p>
                    <p>
                    <input type="submit" id="login" value="Add" name="register">
                    </p>

            </form>








<?php

$query = "SELECT Author_ID, Author_name, Author_born, Author_describtion FROM author";


$result = $con->query($query);
?>
<table>
  <tr>
    <th>Number</th>
    <th>Author_ID</th>
    <th>Author_name</th>
    <th>Author_born</th>
    <th>Author_describtion</th>
    <td>Delete</td>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['Author_ID']; ?> </td>
   <td><?php echo $data['Author_name']; ?> </td>
   <td><?php echo $data['Author_born']; ?> </td>
   <td><?php echo $data['Author_describtion']; ?> </td>
   <td><a href="deleteAuthor.php?Author_ID=<?php echo $data['Author_ID']; ?>">Delete</a></td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>


 <footer></footer>

<script src="js/workerNav.js"></script>
<script src="js/footer.js"></script>
<script src="js/home.js"></script>

</body>
</html>








