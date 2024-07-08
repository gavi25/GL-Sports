<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || GL SPORTS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">GL SPORTS</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        <li><a href="index.php">Home</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

            <!--- About us ------>

              <!----- About Us Page ----->


<div class="about-section">
        <h1>About Us Page</h1>
    

    <p> <h2>GL Sports - Your One-stop Shop for Sports Merchandise </h2></p>
        <br> <br>
    <p> <h3> About GL Sports </h3> </p>
    <br>
    <p>Looking for high-quality sports apparel and cricket jersey, which is comfortable and sweat-free 
        yet trendy and sophisticated at the most affordable rates? You have arrived at the right place. 
    <br> <br>
    GL sports has truly redefined athleisure by offering a wide array of affordable sports apparel
     across categories and professional-level sporting equipment. 
    <br> <br>
    GL Sports is the kit sponsor of many county cricket teams. Be it the glorious white cricket
     jersey that the Indian team adorns in Test matches, the retro cricket jersey that they so proudly 
     wear in limited-overs cricket, or the training kits - you can find them all under one roof.
     <br> <br>
     Additionally, fan edition jerseys, activewear, and t-shirts are all made of high-quality fabric and 
     design, keeping your comfort and style in mind.
     <br> <br>
     What are you waiting for? Head over to GL Sports and get your hands on the best sports merchandise in India.
    </p>
    <br> <br>

    <h2>Why Shop at GL Sports?</h2> 
    <br>
    <p>
        GL Sports is truly your one-stop destination for all sportswear. Every product listed on the 
        website is made keeping in mind the users' comfort, style, and convenience. Who says sportswear 
        is only meant to be worn when you are out on the field or in training? Athleisure has changed the 
        clothes that we buy and model, and GL Sports is at the forefront of it.
        <br><br>
        If you are wondering why you should buy your sports merchandise from GL Sports, let's list 
        down a few reasons:
        <br><br>
        <li> Trusted by many teams , accessible to all: How many times has it happened that you have
             wanted to get your hands on the Team India cricket jersey but don't know an avenue to 
             buy it? Here's the solution to the problem. GL Sports is the principal kit sponsor of 
             the cricket team, and you will find all jerseys that team India wears right
              here on the GL Sports website. 
        </li>
        <br><br>
        <li>
            High-quality sports apparel without compromising on style: Gone are the days when sports jerseys 
            were meant to be worn only in training. Without compromising on the quality, GL Sports has 
            manufactured products in keeping with what's trending in the fashion world.
        </li>
        <br><br>
        <li>
            Affordable prices compared to competitors: All products on the GL Sports website are priced, 
            keeping users from all walks of life in mind. The products, irrespective of the price point, 
            are professional-level sporting equipment, which will keep you sweat-free and comfortable at 
            all times.
        </li>
        <br> <br>
        <li>
            Homegrown: GL Sports is 100% homegrown, and all the products are processed and made in India.
        </li>
        <br><br>
        <li>
            Hassle-free navigation and secure transactions: The GL Sports website has a top-notch user 
            interface with no lag time, making navigation through the products a breeze. You select a product,
             decide on the sizes and reach the payment page in no time. All transactions on the GL Sports 
             platform are 100% secure and safe. There is also an active customer support team to help with all 
             your queries and grievances.
        </li>
    </p>
    <br><br>

    <h2>Why Buy the Team India cricket jersey on GL Sports?</h2>
    <br><br>

    <p>
        GL Sports is the official kit sponsor of the County cricket team, by way of which you will 
        find all authentic Team India products right here. All cricket jerseys on GL Sports are made 
        of 100% Polyester and moisture-absorbing fabric to keep you dry at all times.
        <br><br>
        There are different varieties of India cricket team jerseys on GL sports with different price
         points for you to choose from. The official team India Retro cricket jersey evokes nostalgia 
         as it takes you back to the 1992 World Cup. The Test whites are a thing of beauty, while
          the training jerseys are built for absolute comfort.
        <br><br>
        So, get hold of the official Indian jerseys and cheer for your favorite cricketers as they 
        sweat it out on the field for the nation. Train like champions in the official training jersey 
        and stand apart from the crowd. Scream your lungs out for the Men in Blue wearing the exclusive 
        Team India Pride Series t-shirts.
        <br><br>
        Here is your chance to be involved in Team India's journey as they go about conquering one 
        nation after another. Visit the GL Sports website and express your love of the game every day!
        <br><br>
    </p>

    <h2>GL Sports Product Range</h2>
    <br><br>

    <p>
        From Team India official kits to training jerseys and t-shirts, you will find every 
        sports merchandise on mplsports.in. Here are some of the products on MPL Sports listing 
        currently:
        <br><br>
        1. Team India jerseys: GL Sports has a variety of Team India jerseys on its website, 
        both Player and Fan edition.
        <br><br>
        <li>
            The Official Player Edition Team India Test and Limited-overs jerseys are the exact 
            ones that your favorite Indian cricketers wear on the field in international cricket.
        </li>
        <li>
            The fan edition cricket jersey is a stitch-by-stitch match of the official Team India 
            jerseys and come at a lesser price.
        </li>
        <li>
            GL Sports has also come up with a special Stadium edition jersey with the same elements 
            as the original limited-overs jersey but at a lower price.
        </li>
        <br><br>
        2. Training jerseys: There are different training jerseys and vests that you can find on 
        the GL Sports website. These are the very same jerseys that the Indian team wears while
         practicing and training.
         <br><br>
         3. Team India Pride Series: These are casual everyday wear t-shirts that you can pair up 
         with jeans or track pants and cheer your favorite players.
    </p>
<br><br>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
       
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; GL SPORTS. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

<div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone</p>
                    <div class="app-logo">
                        <img src="images/images/playstore.jpg">
                        <img src="images/images/appstore.jpg" >
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/images/logo.png" >
                    <p>Our Purpose is to sustainably benefit sports accessories to all</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Telegram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>

            <hr>

            <p class="copyright">Copyright 2022 - GL Sports</p>
        </div>
    </div>

  </body>
</html>
