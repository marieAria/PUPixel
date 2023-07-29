<?php
session_start();

// Check if the user is logged in and retrieve the first name from the session
if (isset($_SESSION['firstname'])) {
    $firstname = $_SESSION['firstname'];
} else {
    // Redirect the user to the login page if not logged in
    header("Location: loginform.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutStyle.css">
    <link rel = "icon" href = "pupixel.png" type = "image/x-icon">
    <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>    
    <title>About</title>
</head>
<body>
      <!-- Header -->
      <header class="head-wrap">
        <nav class="nav-wrap">
            <div class="nav-content nav-left"> 
                <a href="home.php"><img src="./img/pxl-w.png" alt="pixel logo" class="nv-image" ></a>
            </div>

            <div class="nav-content nav-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contactindex.php">Contact</a></li>
               <li> <img src="navImg/user1.png" class="user-pic" onclick="toggleMenu()"></li>

          <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
            <div class="user-info">
              <img src="navImg/user1.png" alt="">
              <h2 style="font-weight: bolder"><?php echo $firstname; ?></h2>
            </div>
            <hr>
            <a href="userprofile.php" class="sub-menu-link">
              <img src="navImg/userprofile.png" alt="">
              <p>User Profile</p>
              <span>></span>
            </a>
            <a href="#" class="sub-menu-link">
              <img src="navImg/setting.png" alt="">
              <p>Settings</p>
              <span>></span>
            </a>
            <a href="faq.php" class="sub-menu-link">
              <img src="navImg/help.png" alt="">
              <p>FAQ</p>
              <span>></span>
            </a>
            <a href="landing.php" class="sub-menu-link">
              <img src="navImg/logout.png" alt="">
              <p>Logout</p>
              <span>></span>
            </a>
            

          </div>
        </div>
            </div>
        </nav>
    </header>
    <div class="header">
        <div class="headerCover">
            <div class="headerContent">
            <img src="pupixel1.png" alt="" style="height: 300px;">
            </div>
        </div>
    </div>

    <div class="projectDesc">
        <div class="projectDescContent">
            <center> <h1>Project Description</h1></center>
            <p>PUPixel is a membership website that will provide exclusive, high quality images of Polytechnic University of the Philippines for its members. The purpose of the website is to give people a chance to visit the PUP digitally in a way of images collected by people who are able to go there. 
            The website will cater to students, alumni, faculty members, and other stakeholders who are interested in acquiring photos of PUP’s events, landmarks, and other significant moments.</p>
            
        </div>
    </div>

    <div class="targetAudience">
        <div class="targetAudienceContent">
            <center> <h1> Target Audience</h1></center>
            <p>This website is for current students of the PUP (3rd year and below) who never stepped inside the school and only saw the school in some limited photos on the internet because of the cancellation of face-to-face classes due to pandemic and power outage. This will give them an idea on how the school looks inside and it can also help them familiarize the facilities even though they haven't been there yet.
            It will also serve as a promotion for people who are interested in enrolling in the PUP in the future. It will also help alumni who wanted to visit the school but cannot find the schedule to do so and those who just wanted to see what changes happened in the PUP since they graduated.</p>
            
            
        </div>
    </div>

    <div class="features">
        <div class="featuresContent">
            <center> <h1>Features</h1></center>
            <p>The main goal of this project is to create a membership website with the following features:</p>
            <ul>
                <li><u> Membership System:</u> PUPixel will include a membership system where users should register/join up and login. Users will be able to access and download only PUP photographs by becoming a member of the website. </li>
                <li><u> Photo Collections:</u> The website will showcase various PUP photo collections, including those of campus landmarks, university events, and campus life. Professional photographers will snap the pictures, and they will show off PUP's beauty and distinctiveness.</li>
                <li><u> Download and Share:</u> Users will have the option to download and share whatever photos they like. Due to their high resolution, the photographs will be suitable for both printing and digital use.</li>
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
                        <a href="faq.php"><span class="fas fa-question-circle"></span></a>
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
