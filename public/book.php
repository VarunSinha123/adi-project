<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link
  rel="stylesheet" aria-colspan=""href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header section start-->
    <section class="header">
        <a href="home.php" class="logo">Sky Booking</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">about</a>
            
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            
        </nav>
        <!-- <div id="menu-btn"  class="fas fa-bars>
    </div> -->
    <div id="menu-btn"  class="fas fa-bars">
    </div>
    </section>
    <!-- header section end-->
    <div class="heading" style="background: url('banner.jpg')">
        <h1 style="color:#9336B4;">book now</h1>
    </div>
    <!--booking section start  -->
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name  :</span>
                    <input type="text" placeholder="enter your name" name="name" >
                </div>
                <div class="inputBox">
                    <span>email  :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone  :</span>
                    <input type="number" placeholder="enter your phone no" name="phone">
                </div>
                <div class="inputBox">
                    <span>address  :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to  :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many  :</span>
                    <input type="text" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals  :</span>
                    <input type="date"  name="arrivals">
</div>
                <div class="inputBox">
                    <span>leaving  :</span>
                    <input type="date"  name="leaving">
                </div>



            </div>
            <input type="submit" value="sumbit" class="btn" name="send">
        </form>
    </section>
    <!-- booking section end -->
    <!-- Footer Section start-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a> 
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>

            </div>
            <div class="box">
                <h3>Extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
           
            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+931-521-9542</a> 
                <a href="#"><i class="fa-brands fa-whatsapp"></i>+989-674-8976</a>
                <a href="#"><i class="fas fa-envelope"></i>piyushvarshney@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>muthara, india - 110087</a>
           </div>
           <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook"></i>facebook</a> 
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>  
            <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#"><i class="fa-brands fa-threads"></i>threads</a>  
           </div>
        </div>
        <div class="credit">created by <span><b> miss.mousam singh</b></span></div>
    </section>
    <!-- Footer Section end-->
    <!--swiper js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>