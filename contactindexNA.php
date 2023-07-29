<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact </title>
    <link rel="stylesheet" href="styleContact.css">
    <link rel = "icon" href = "pupixel.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <!-- Header -->
   <header class="head-wrap">
    <nav class="nav-wrap">
        <div class="nav-content nav-left"> 
            <a href="landing.php"><img src="./img/pxl-w.png" alt="pixel logo" class="nv-image" ></a>
        </div>

        <div class="nav-content nav-right">
            <li><a href="landing.php">Home</a></li>
            <li><a href="aboutNA.php">About</a></li>
            <li><a href="contactindexNA.php">Contact</a></li>
           <li> <a href="loginform.php"><img src="navImg/profile1.png" class="user-pic" onclick="toggleMenu()"></a></li>

      
        </div>
    </nav>
</header>>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">1016 Anonas,</div>
          <div class="text-two">Sta. Mesa, Maynila</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+6398 989 5647</div>
          <div class="text-two">+6396 343 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">group8lab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any concerns or any types of queries related to our website, you can send us message from here. It's our pleasure to help you.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message"></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
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
