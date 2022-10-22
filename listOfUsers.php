<?php

session_start();

include("connection.php");
include("functions.php");
require_login();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

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








<?php

$query = "SELECT usersName, usersLastName, usersEmail, usersPhone, userType
FROM users";

$result = $con->query($query);
?>
<table>
  <tr>
    <th>Number</th>
    <th>usersName</th>
    <th>usersLastName</th>
    <th>usersEmail</th>
    <th>usersPhone</th>
    <th>userType</th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['usersName']; ?> </td>
   <td><?php echo $data['usersLastName']; ?> </td>
   <td><?php echo $data['usersEmail']; ?> </td>
   <td><?php echo $data['usersPhone']; ?> </td>
   <td><?php echo $data['userType']; ?> </td>
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