<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header section start -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="item.php">item</a>
            <a href="preorder.php">preorder</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section end -->

    <div class="heading" style="background:url(images/merch1.jpg) no-repeat">
        <h1>Pre-order now!</h1>
    </div>

    <!-- preorder section starts -->
    <section class="preorder">
        <h1 class="heading-title">pre-order now!</h1>

        <form action="preorder_form.php" method="post" class="preorder_form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your phone number" name="phone">
                </div>
                <div class="inputBox">
                    <span>item :</span>
                    <select name="choosedItem" id="choosedItem">
                        <option value="">- pilih item -</option>
                        <option value="item1">Keychain Pavolia reine</option>
                    </select>
                </div> 
                <div class="inputBox">
                    <span>Quantity :</span>
                    <input type="number" placeholder="number of item" name="quantity">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>
    <!-- preorder section end -->


    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="item.php"> <i class="fas fa-angle-right"></i>item</a>
                <a href="preorder.php"> <i class="fas fa-angle-right"></i>preorder</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask question</a>    
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>    
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>    
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>    
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>     
                <a href="#"> <i class="fas fa-phone"></i> +62-888-888</a>     
                <a href="#"> <i class="fas fa-envelope"></i> bobi@gmail.com</a>     
                <a href="#"> <i class="fas fa-map"></i> Kampus 1 AKPRIND</a>     
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-github"></i>github</a>
            </div>
        </div>

    <div class="credit">created by <span>Fx. Guntur Putra Susanto</span></div>

    </section>
    <!-- footer section end -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- js link -->
    <script src="js/script.js"></script>
</body>

</html>