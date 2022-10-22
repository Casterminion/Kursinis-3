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
        <h2 class="product-category">Books about wealth mindset</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard1.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Rich Dad Poor Dad: What the Rich Teach their Kids About Money That The Poor And Middle Class Do Not!</h2>
                    <p class="product-short-des">Robert T. Kiyosaki</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard2.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Think And Grow Rich</h2>
                    <p class="product-short-des">Napoleon Hill</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard3.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">SECRETS MILLIONAIRE MIND IN MM</h2>
                    <p class="product-short-des">T. Hark Eker</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard4.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Psychology of Money</h2>
                    <p class="product-short-des">Morgan Housel</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard5.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Way to Wealth</h2>
                    <p class="product-short-des">Bendžamin Franklin</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard6.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Science of Getting Rich</h2>
                    <p class="product-short-des">Wallace D Wattles</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/wealthcard7.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Richest Man in Babylon: The World's Favorite Inspirational Guide to Managing Wealth</h2>
                    <p class="product-short-des">George Samuel Clason</p>
                </div>
            </div>



        </div>
    </section>





    
    <section class="product">
    <h2 class="product-category">Youtube channels about wealth</h2>
        <div class="product-container">
            
            <a href="https://www.youtube.com/c/ImanGadzhi"><img src="img/Ytwealth1.png" alt=""></a>
            <a href="https://www.youtube.com/c/ImanGadzhi"><img src="img/Ytwealth2.png" alt=""></a>
            <a href="https://www.youtube.com/c/MarkTilbury"><img src="img/Ytwealth3.png" alt=""></a>


        </div>
    </section>



        </div>
    </section>

    
    <footer></footer>

    <script src="js/nav.js"></script>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>

    
    
</body>
</html>