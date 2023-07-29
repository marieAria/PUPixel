<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "pupixel.png" type = "image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lp_style.css">

    <title>PXEL</title>
</head>


<body>
       <!-- Header -->
       <header class="head-wrap">
        <nav class="nav-wrap">
            <div class="nav-content nav-left"> 
                <a href="./landing.php"><img src="./img/pxl-w.png" alt="pixel logo" class="nv-image" ></a>
            </div>

            <div class="nav-content nav-right">
                <li><a href="./landing.php">Home</a></li>
                <li><a href="aboutNA.php">About</a></li>
                <li><a href="contactindexNA.php">Contact</a></li>
               <li> <a href="loginform.php"><img src="navImg/profile1.png" class="user-pic" onclick="toggleMenu()"></a></li>

         
            </div>
        </nav>
    </header>

    <div class="landingHead">
        <div class="landingHeadContent">
            <div class="leftLH">
            <h1>
                PUPixel
            </h1>
            <h2>
                A collection of high quality images of Polytechnic University of the Philippines.
            </h2>
            <a href="joinus.php"><button class="main-btn">
                Join Now 
            </button></a>
        </div>
            <div class="rightLH">
                <img src="pupixel1.png" alt="">
            </div>

        </div>
    </div>

    <!-- Sections 1 -->
    <section class="sect-cont">
        <div class="wrap">
            <!-- <div class="sc-header">
                <h1>
                    Get Inspired Everyday
                </h1>
            </div> -->
    
            <div class="parent">
                <div class="img-child">
                    <img src="./img/1.webp" alt="">
                </div>
    
                <div class="txt-child">
    
                    <h2>
                        Browse
                    </h2>
    
                    <p>
                        Create an account and browse through our collection of pictures taken from PUP <br> by students and professional photographers.
                    </p>
                </div> 
            </div>
        </div>   

    </section>
    
    <!-- Sections 2 -->
    <div class="sect-cont">
        <div class="wrap">
            <div class="parent">
                <div class="txt-child">
                    <h2>
                        Collect and Download
                    </h2>
                    <p>
                        Save pictures you like in your dashboard account or download it to your <br> local device with a click of a button!
                    </p>
                </div>
                
                <div class="img-child">
                    <img src="./img/pylon.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="sect-cont">
        <div class="wrap">
            <div class="parent">
                <div class="img-child">
                    <img src="./img/lagoon.jpg" alt="">
                </div>
                <div class="txt-child">
                    <h2>
                        For Everyone
                    </h2>
                    <p>
                        Incoming students, current students and alumni are welcome to sign up.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="main-contentFoot">

<!-------------------- Footer Left Side -------------------->

            <div class="left box">
                <h1 class="h1Foot">What is PUPixel?</h1>
                <div class="content">
                    <p class="pFoot">PUPixel is a website that provides exclusive photos of the Polytechnic University of the Philippines (PUP) campus, events, and activities. Users can browse a vast collection of high-quality photos taken by talented photographers, purchase prints or digital downloads of their favorite images, and experience the beauty of PUP through stunning photography.</p>
                </div>
            </div>

<!-------------------- Footer Center -------------------->

            <div class="center box">
                <h1 class="h1Foot">Get in Touch</h1>
                <div class="content">
                    <div class="telephone">
                        <span class="fas fa-phone-alt"></span>
                        <span class="text">+63(2)5335120</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">PUPixel@gmail.com</span>
                    </div>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                        <a href="#"><span class="fab fa-discord"></span></a>
                        <a href="faqNA.php"><span class="fas fa-question-circle"></span></a>
                    </div>
                </div>
            </div>

<!--------------------Footer Right Side-------------------->

            <div class="right box">
                <h1 class="h1Foot">Newsletter</h1>
                <div class="content">
                    <form action="#">
                        <div class="name">
                            <div class="text">Full Name *</div>
                            <input type="name" required>
                        </div>
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="btn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            
        </div>

<!--------------------Footer Bottom-------------------->
        <div class="bottom">
            <center>
                <span class="policy"><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a></span><br>
                <span class="credit">&copy; 2023 PUPixel.    </span><span>All rights reserved.</span>  
            </center>
        </div>
    </footer>
    <script>
        //nav

      let subMenu = document.getElementById("subMenu");

      function toggleMenu(){
        subMenu.classList.toggle("open-menu")
      }
  </script>
</body>
</html>