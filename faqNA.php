<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylefaq.css">
    <link rel = "icon" href = "pupixel.png" type = "image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <title>FAQ</title>
</head>
<style>
    
</style>
<body>
<div class="container">
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
        <div class="banner" style="margin-top: 70px;">
           
            <h1>Frequently Asked Questions</h1> 
        </div> 
   

    <div class="faq">
        <div class="clipart">
            <img src="img/faq4.png" alt="thinking">
        </div>
        <ul id="accordion">
            <p id="description">Here are some questions about the PUPixel .
                <li>
                    <label for="first"><b>What is PUPixel ?</b><span>+</span></label>
                    <input type="radio" name="accordion" id="first">
                    <div class="content">
                        <p>PUPixel is an exclusive membership website that offers a visually captivating experience. 
                            We curate a collection of high-quality images that highlight the beauty and heritage of PUP.</p>
                    </div>
                </li>
                <li>
                    <label for="second"><b>How can I access PUPixel?</b><span>+</span></label>
                    <input type="radio" name="accordion" id="second">
                    <div class="content">
                        <p>Just visit our website at www.pixel.com and sign up for a membership. Once you're a member, you can explore the stunning imagery and immerse yourself in 
                            the world of PUP.</p>
                    </div>
                </li>
                <li>
                    <label for="third"><b>Can I use PUPixel on my mobile device?</b><span>+</span></label>
                    <input type="radio" name="accordion" id="third">
                    <div class="content">
                        <p> We've designed PUPixel to be responsive and accessible on various devices, including smartphones and tablets. So, you can enjoy the visual journey of PUP on the go!</p>
                    </div>
                </li>
                <li>
                    <label for="fourth"><b>How do I become a Pixel member?</b><span>+</span></label>
                    <input type="radio" name="accordion" id="fourth">
                    <div class="content">
                        <p>To become a PUPixel member, you need to register online. 
                            You can register at wwww.pixel.com ,and you need to present a valid ID and pay the membership fee.</p>
                    </div>
                </li>
                <li>
                    <label for="fifth"><b>How does PUPixel foster a sense of community?</b><span>+</span></label>
                    <input type="radio" name="accordion" id="fifth">
                    <div class="content">
                        <p>PUPixel aims to bridge the gap caused by the COVID-19 pandemic and limited physical access to the school. Through our platform, we provide virtual exploration, resources, and engagement opportunities, bringing the PUP community closer together 
                            and fostering a sense of belonging and pride.</p>
                    </div>
                </li>
        </ul>
    </div>
</div>    
<footer>
    <div class="main-content">

<!-------------------- Footer Left Side -------------------->

        <div class="left box">
            <h1>What is PUPixel?</h1>
            <div class="content">
                <p>PUPixel is a website that provides exclusive photos of the Polytechnic University of the Philippines (PUP) campus, events, and activities. Users can browse a vast collection of high-quality photos taken by talented photographers, purchase prints or digital downloads of their favorite images, and experience the beauty of PUP through stunning photography.</p>
            </div>
        </div>

<!-------------------- Footer Center -------------------->

        <div class="center box">
            <h1>Get in Touch</h1>
            <div class="content">
                <div class="telephone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+63(2)5335120</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">pixel.inc@gmail.com</span>
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
            <h1>Newsletter</h1>
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