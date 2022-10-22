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
        <h2 class="product-category">Books about discipline mindset</h2>
        <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard1.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Savidisciplinos galia. Jokių pasiteisinimų!</h2>
                    <p class="product-short-des">Brajanas Treisis</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard2.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Discipline Equals Freedom: Field Manual</h2>
                    <p class="product-short-des">Jocko Willink</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard3.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Willpower Instinct: How Self-Control Works, Why It Matters, and What You Can Do to Get More of It</h2>
                    <p class="product-short-des">Kelly McGonigal</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard4.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Willpower: Rediscovering the Greatest Human Strength</h2>
                    <p class="product-short-des">Roy Baumeister, John Tierney</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard5.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">Įpročio galia. Kodėl mes taip elgiamės ir kaip tai pakeisti</h2>
                    <p class="product-short-des">Charles Duhigg</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard6.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Marshmallow Test: Mastering Self-Control</h2>
                    <p class="product-short-des">Walter Mischel</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <img src="img/disciplinecard7.png" class="product-thumb"alt="">
                    <button class="card-btn">add to whishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product brand">The Science of Self-Discipline: The Willpower, Mental Toughness, and Self-Control to Resist Temptation and Achieve Your Goals</h2>
                    <p class="product-short-des">Peter Hollins</p>
                </div>
            </div>



        </div>
    </section>





    
    <section class="product">
    <h2 class="product-category">Youtube channels about discipline</h2>
        <div class="product-container">
            
            <a href="https://www.youtube.com/c/JockoPodcastOfficial"><img src="img/Ytdiscipline1.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=5tSTk1083VY"><img src="img/Ytdiscipline2.png" alt=""></a>
            <a href="https://www.youtube.com/watch?v=njDLNt-1ugM"><img src="img/Ytdiscipline3.png" alt=""></a>


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