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
    <link rel="stylesheet" href="css/sellBooks.css">

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


<div class="header">
  <h2>How to sell a book</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Easy way</h2>
      <h5>How to sell, Oct 12, 2022</h5>
      <img class="Sellbooks" src="img/Sellbooks1.png" alt="">
      <p>Use knygos.lt</p>
      <p>So principle really simple. Buy a book 50% less of the price and sell on their site. They taking care of everything, but takes 40% commissions. Tip for selling efficently - evaluate if books have a value and can be sold easily</p>
    </div>
    <div class="card">
      <h2>Harder way</h2>
      <h5>How to sell, Oct 12, 2022</h5>
      <img class="Sellbooks" src="img/Sellbooks2.png" alt="">
      <p>Use any other site</p>
      <p>Basic principle sell high, buy low. Because there always gonna be people who will buy something without looking for a better prince. You can use something like facebook marketplace.</p>
    </div>
  </div>
</div>

<footer></footer>


    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>

    
    
</body>
</html>