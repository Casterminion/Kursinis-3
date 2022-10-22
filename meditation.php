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



    <section class="product">
    <h2 class="product-category">Meditations</h2>
        <div class="product-container">
            <a href="https://www.youtube.com/watch?v=ZToicYcHIOU&t=310s"><img src="img/Ytmeditation1.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=j7d5Plai03g&t=490s"><img src="img/Ytmeditation2.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=syx3a1_LeFo"><img src="img/Ytmeditation3.png" alt=""></a>
        </div>
        <div class="product-container">
            <a href="https://www.youtube.com/watch?v=Xl_B45DpMLU"><img src="img/Ytmeditation4.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=lVx3mFxML80"><img src="img/Ytmeditation5.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=YF_P1ZzYgjA"><img src="img/Ytmeditation6.png" alt=""></a>
        </div>
        <div class="product-container">
            <a href="https://www.youtube.com/watch?v=fkgzQsxdn9I"><img src="img/Ytmeditation7.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=Cx2bmuuKKkE"><img src="img/Ytmeditation8.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=uumInvT4t9Y"><img src="img/Ytmeditation9.png" alt=""></a>
        </div>
    </section>
    
    <footer></footer>

    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>

    
    
</body>
</html>