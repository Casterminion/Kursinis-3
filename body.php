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
        <h2 class="product-category">Books about body</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard1.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Breathl, The New Science of a Lost Art</h2>
                    <p class="product-short-des">James Nestor</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard2.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Human Anatomy</h2>
                    <p class="product-short-des">DK</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard3.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Jean Marc Bourgery. Atlas of Human Anatomy and Surgery</h2>
                    <p class="product-short-des">Jean-Marie Le Minor, Henri Sick</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard4.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Exploring Creation with Advanced Biology 2nd Edition The Human Body, Solutions and Tests</h2>
                    <p class="product-short-des">Marylin Shannon and Rachael Yunis</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard5.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Secret Language of Anatomy. An Illustrated Guide to the Origins of Anatomical Terms</h2>
                    <p class="product-short-des">Cecilia Brassett, Emily Evans, Isla Fay, Dr. Alice Roberts</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard6.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">A Cultural History of the Human Body in the Medieval Age</h2>
                    <p class="product-short-des">Linda Kalof</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/bodycard7.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Investigating the Human Body</h2>
                    <p class="product-short-des">Connie Jankowski</p>
                </div>
            </div>



        </div>
    </section>
   
    <footer></footer>

    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>

    
    
</body>
</html>