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
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MPI</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/tradingBooks.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>

<body>

<nav class="navbar"></nav>




<?php

$query = "SELECT usersID, usersName, usersLastName, usersEmail, usersPhone, userType FROM users";


$result = $con->query($query);
?>
<table>
  <tr>
    <th>Number</th>
    <th>usersID</th>
    <th>usersName</th>
    <th>usersLastName</th>
    <th>usersEmail</th>
    <th>usersPhone</th>
    <th>userType</th>
    <td>Delete</td>
<?php
if ($result->num_rows > 0) {
  $sn=1;
  while($data = $result->fetch_assoc()) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['usersID']; ?> </td>
   <td><?php echo $data['usersName']; ?> </td>
   <td><?php echo $data['usersLastName']; ?> </td>
   <td><?php echo $data['usersEmail']; ?> </td>
   <td><?php echo $data['usersPhone']; ?> </td>
   <td><?php echo $data['userType']; ?> </td>
   <td><a href="admindelete.php?usersID=<?php echo $data['usersID']; ?>">Delete</a></td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>


 <footer></footer>

<script src="js/adminNav.js"></script>
<script src="js/footer.js"></script>
<script src="js/home.js"></script>

</body>
</html>


