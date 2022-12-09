<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- swiper css link -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!--custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section start -->
    <section class="header">
        <a class="logo" herf="Home.php">Travel</a>
        <nav class="navbar">
            <a href=Home.php>Home</a>
            <a href=about.php>About</a>
            <a href=package.php>Package</a>
            <a href=book.php>Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
       
    </section>
<!-- header section end  -->

<!-- home section starts -->

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(image/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>

                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                           <h3>dicover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>

                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(image/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>

                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            
        </div>
    </section>


<!-- home section end -->

<!-- service section starts -->

<section class="services">
    <h1 class="heading-title"> our service </h1>
    
    <div class="box-container">
        <div class="box">
            <img src="Image/icon-1.png" alt="">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="Image/icon-2.png" alt="">
            <h3>Tour Guide</h3>
        </div>
        <div class="box">
            <img src="Image/icon-3.png" alt="">
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <img src="Image/icon-4.png" alt="">
            <h3>Camp Fire</h3>
        </div>
        <div class="box">
            <img src="Image/icon-5.png" alt="">
            <h3>Off Road</h3>
        </div>
        <div class="box">
            <img src="Image/icon-6.png" alt="">
            <h3>Camping</h3>
        </div>
</section>
    
<!-- services section ends -->

<!-- home about section start -->

<section class="home-about">
    <div class="image">
        <img src="image/about-img.jpg" alt="">
    </div>
    
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quibusdam nesciunt delectus maiores atque veniam amet odio eligendi porro, repellendus ex ullam ut dolorum minima possimus eveniet voluptas deleniti unde.</p>
        <a href="about.php" class="btn">read more</a>

</section>
<!-- home about section ends -->

<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor exercitationem pariatur sed ullam quibusdam quisquam?</p>
                <a href="book.php" class="btn">Book Now</a>
            </div> 
        </div>
        <div class="box">
            <div class="image">
                <img src="image/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor, recusandae atque pariatur. Quas, nobis unde nulla doloremque incidunt exercitationem pariatur sed ullam quibusdam quisquam?</p>
                <a href="book.php" class="btn">Book Now</a>
            </div> 
        </div>
        <div class="box">
            <div class="image">
                <img src="image/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor, consequatur perspiciatis nulla atque pariatur. Quas, nobis unde nulla doloremque incidunt exercitationem pariatur sed ullam quibusdam quisquam?</p>
                <a href="book.php" class="btn">Book Now</a>
            </div> 
        </div>    
    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>


</section>    

<!-- home packages section ends -->

<!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
           <h3>upto 50% off</h3>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sint doloribus quo. Nam distinctio quae nesciunt consequatur nemo alias ipsa omnis quidem? Maxime rerum, voluptatem placeat quisquam velit voluptate cum.</p>
           <a href="book.php" class="btn">Book Now</a>
        </div>


    </section>

<!-- home offer section starts -->



<!-- footer section starts -->


<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>Packages</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy</a>
            <a href="#"><i class="fas fa-angle-right"></i>Term & Condition</a>
        </div>
        <div class="box">
            <h3>contact infac</h3>
            <a href="#"><i class="fas fa-phone"></i>7719849077</a>
            <a href="#"><i class="fas fa-phone"></i>7719849078</a>
            <a href="#"><i class="fas fa-envelope"></i>shindesanchit33@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Pune India - 411015</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>    
    </div>
    <div class="credit"> created by <span>Sanchit33</span> | all the rights reserved!</div>


</section>


<!-- footer section ends -->




<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>



<!-- custom js file link -->
<script src="JS/script.js"></script>
</body>
</html>
