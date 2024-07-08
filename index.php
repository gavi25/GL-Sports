<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>



<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GL SPORTS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>

    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    

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
          <li><a href="about.php">About</a></li>
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




    <img data-interchange="[images/bolt-retina.jpg, (retina)], [images/bolt-landscape.jpg, (large)], [images/bolt-mobile.jpg, (mobile)], [images/bolt-landscape.jpg, (medium)]">
    <noscript><img src="images/bolt-landscape.jpg"></noscript>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

       
      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>






    








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GL Sports</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"> 
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/images/logo1.png"  width="100px">
                    <a href="index.php"></a>
                </div>
                

               
            </div>
    
            <div class="row">
                <div class="col-2">
                    <h1>Life is like Cricket <br>Take Infinite Wickets and Face the Pace to Win the Race  </h1> 
                     <h3>Self Belief and Confidence will always earn you Success.!  </h3>
                        <p>One team, one dream. 
                            Go big or go home.</p>
    
                    <a href="products.php"class="btn">Explore Now &#8669;</a>
                </div>
                <div class="col-2">
                    <img src="images/images/bg.jpg"  height="400px" width="500px">
                </div>
            </div>
        </div>
    </div>

    <!----- Featured Categories -------> 

    <div class="categories">

        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/images/categories1.jpg"> 
                </div>
                <div class="col-3">
                    <img src="images/images/categories2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/images/categories3.jpg" >
                </div>
            </div>            
        </div>
    </div>

    <!----- Featured Products ------->     

    <div class="small-container">
        <h2 class="title">Featured Products</h2>

        <div class="row">
            <div class="col-4">
                <img src="images/images/product1.jpg">
                <h4>Team India Fan Hoodie</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs. 1799/-</p>
                
            </div>
            <div class="col-4">
                <img src="images/images/product2.jpg">
                <h4>Team India Fan Cap</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs. 899/-</p>
            </div>
            <div class="col-4">
                <img src="images/images/product3.jpg">
                <h4>Team India Fan Jogger</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs. 1299/-</p>
            </div>
            <div class="col-4">
                <img src="images/images/product4.jpg">
                <h4>Team India Fan Polo</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rs. 1450/-</p>
            </div>
        </div>
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/images/product5.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs. 1799/-</p>
                    
                </div>
                <div class="col-4">
                    <img src="images/images/product6.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Rs. 899/-</p>
                </div>
                <div class="col-4">
                    <img src="images/images/product7.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Rs. 1299/-</p>
                </div>
                <div class="col-4">
                    <img src="images/images/product8.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rs. 1450/-</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="images/images/product9.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>Rs. 1799/-</p>
                    
                </div>
                <div class="col-4">
                    <img src="images/images/product10.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Rs. 899/-</p>
                </div>
                <div class="col-4">
                    <img src="images/images/product11.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Rs. 1299/-</p>
                </div>
                <div class="col-4">
                    <img src="images/images/product12.jpg">
                    <h4>Jersey</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>Rs. 1450/-</p>
                </div>
            </div>
    </div>

    <!------ offer ----->
     
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/images/customise.jpg" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on GL Sports</p>
                    <h1>Customisable Jersey's</h1>
                    <p>Customise your jersey with your name and favourite number </p>
                    <small>This is mi band 4 and write some text</small> <br>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!----Testimonial ---->

    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        "The difference between the impossible and the possible lies in a man's determination."
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/images/virat.jpg" >
                    <h3>Virat Kohli</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>Very Impressive Website. All products are of good quality</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/images/hardik.jpg" >
                    <h3>Hardik Pandya</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>This is a lovely site enjoyed shopping here . spot on for youngsters </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <img src="images/images/rishab.jpg" >
                    <h3>Rishab Pant</h3>
                </div>
            </div>
        </div>
    </div>

    <!----- Brands ----->

    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/images/dream11.png" >
                </div>
                <div class="col-5">
                    <img src="images/images/byju's.png" >
                </div>
                <div class="col-5">
                    <img src="images/images/tata.png" >
                </div>
                <div class="col-5">
                    <img src="images/images/one8.png" >
                </div>
                <div class="col-5">
                    <img src="images/images/bcci.png" >
                </div>
            </div>
        </div>
    </div>

    


    <!----- Footer ----->

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

    <!----- JS for Toggle Menu ----->

    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle()
        {
            if(MenuItems.style.maxHeight == "0px")
               {
                     MenuItems.style.maxHeight = "200px";
               }
            else
               {
                      MenuItems.style.maxHeight = "0px";
               }
        }
    </script>
</body>
</html> 
