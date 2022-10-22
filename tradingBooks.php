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

$query = "SELECT Book_name, Author_name, Book_describtion, Book_upload_date, usersName, usersEmail 
FROM books 
INNER JOIN author ON books.book_author_ID = author.Author_ID 
INNER JOIN users ON books.User_id = users.usersID";

$result = $con->query($query);
?>
<table>
  <tr>
    <th>ID</th>
    <th>Book name</th>
    <th>Author name</th>
    <th>Book describtion</th>
    <th>Book upload date</th>
    <th>Users name</th>
    <th>Users email</th>
  </tr>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['Book_name']; ?> </td>
   <td><?php echo $data['Author_name']; ?> </td>
   <td><?php echo $data['Book_describtion']; ?> </td>
   <td><?php echo $data['Book_upload_date']; ?> </td>
   <td><?php echo $data['usersName']; ?> </td>
   <td><?php echo $data['usersEmail']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>


 <footer></footer>

<script src="js/nav.js"></script>
<script src="js/footer.js"></script>
<script src="js/home.js"></script>



</body>
</html>