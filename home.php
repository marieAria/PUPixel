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
    <link rel = "icon" href = "pupixel.png" type = "image/x-icon">
    <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Include jQuery if needed -->
    <title>Dashboard</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter&=Montserrat:wght@600&family=Poppins:wght@600&display=swap');
         :root {
    --body-color: #10100E;

    --clr-maroon: #571f1e;
    --clr-mustard: #e9a901;
    --clr-beige: #ffffe3;
    --clr--rgba: rgb(255,255,227,0.4);
}

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: var(--clr-beige);
             list-style: none;
            text-decoration: none;
         font-family: 'Poppins', sans-serif;
        }
        body{
            background-color:   #ffffe3;

        }
        .outer
        {
            margin-top: 100px;
        }
        .container{
            width: 100%;
            columns: 5;
            column-gap: 10px;
            padding: 15px;
            margin-bottom: 50px;
            background-color: #10100e;
        }
        img{
            width: 100%;
            margin-bottom: 15px;
            border-radius: 10px;

        }
        .imgContainer{
            position: relative;
            
        }
        .imgContainer .btnSave{
            margin-right: 20px;
            width: 53px;
            height: 40px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: 700;
            color: white;
            background-color: #571f1e;
            cursor: pointer;
            position: absolute;
            
            top: 10%;
            left: 15%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .imgContainer:hover .btnSave{
            opacity: 1;

        }
        .btnSave:hover{
            background-color: #e9a901;
            color: black;

        }
        .imgContainer .btnDownload{
            margin-right: 20px;
            width: 83px;
            height: 40px;
            border-radius: 22px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            font-weight: 700;
            color: white;
            background-color: #571f1e;
            cursor: pointer;
            position: absolute;
            
            top: 10%;
            left: 85%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s;
        }
        .imgContainer:hover .btnDownload{
            opacity: 1;

        }
        .btnDownload:hover{
            background-color: #e9a901;
            
            color: black;

        }
         /* Popup styles */
  
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 2;
        }

        .popup img {
            width: 50%;
            height: auto;
            z-index: 2;
            
        }

       
      /* Navigation Bar */

.head-wrap {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1;
    border-bottom: 1px solid var(--clr-beige);
    width: 100%;
    background-color: #571f1e;
  }
  
  .nav-wrap {
    display: flex;
    justify-content: space-between;
    align-items: center;
    
    width: 80%;
    margin: 0 auto;
  }
  
  .nav-content li {
    display: inline-block;
    font-size: 0.8em;
    font-weight: 500;
  }
  
  .nav-content {
    display: flex;
    align-items: stretch;
    justify-content: space-between;
    padding: 20px;
    
  }
  
  .nav-right a {
    margin-left: 70px;
    text-decoration: none;
    color: var(--clr-beige);
  }
  
  .nv-image {
    /* margin-left: 70px; */
    width: 40px;
  
  }
  
    .user-pic
    {
      width: 40px;
      border-radius: 50%;
      cursor: pointer;
      margin-left: 50px;
     margin-top: -10px;
    }
   
    .sub-menu-wrap
    {
      position: absolute;
      top: 100%;
      right: 5%;
      width: 320px;
     
      max-height: 0px;
      overflow: hidden;
      transition: max-height 0.5s;
    }
    .sub-menu-wrap.open-menu
    {
      max-height: 400px;
    }
    .sub-menu
    {
      padding-top: 10px;
      background-color: rgba(0, 0, 0, 0.5);
      padding-bottom: 10px;
    }
  
    .user-info
    {
      display: flex;
      align-items: center;
      justify-content: center;
  
    }
  
    .user-info h2
    {
      font-weight: 500;
      color: #FFFFE3 ;
    }
    .user-info img
    {
      width: 60px;
      border-radius: 50%;
      margin-right: 15px;
      margin-bottom: 0;
    }
    .sub-menu hr
    {
      border: 0;
      height: 1px;
      width: 90%;
      background: #ccc;
      margin: 15px 10px 10px 10px;
    }
    .sub-menu-link
    {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #525252;
      margin: 12px 0;
      margin-left: 30px;
      margin-right: 20px;
    }
    .sub-menu-link p{
      width: 100%;
    }
    .sub-menu-link img
    {
      width: 40px;
      background: #e5e5e5;
      border-radius: 50%;
      padding: 8px;
      margin-right: 15px;
  
    }
    .sub-menu-link span
    {
      font-size: 22px;
      transition: transform 0.5s;
    }
    .sub-menu-link:hover span{
      transform: translate(5px);
    }
    .sub-menu-link:hover p{
      font-weight: 600;
    }
  
    @media screen and (max-width: 600px)  {
        .nav-wrap {
          width: 100%;
        }
      
        .nav-content {
          padding: 10px;
        }
      
        .nav-right a {
          margin-left: 30px;
        }
      
        .user-pic {
          margin-left: 30px;
        }
      
        .sub-menu-wrap {
          right: 2%;
          width: 300px;
        }
      }
      @media screen and (max-width: 400px)
      {
        .nav-right a {
          margin-left: 10px;
        }
      } 
  /*----------------------------*/    

    </style>
    <script></script>
</head>

<body>


      <!-- Header -->
      <header class="head-wrap">
        <nav class="nav-wrap">
            <div class="nav-content nav-left"> 
                <a href="home.php"><img src="./img/pxl-w.png" alt="pixel logo" class="nv-image" style="border-radius: 0;margin-bottom: 0;" ></a>
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

    <div class="outer">
        <div class="container">
          
        </div> 

    </div>


    <div class="notification"></div>
     
    <script src="homeScript.js"></script>
    <!-- Use the $savedImages value as needed -->
  <script src="homeScript.js" data-saved-images="<?php echo htmlspecialchars($savedImages, ENT_QUOTES, 'UTF-8'); ?>"></script>

</body>
</html>
