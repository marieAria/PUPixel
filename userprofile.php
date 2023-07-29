<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="userProfStyle.css">
  <link rel = "icon" href = "pupixel.png" type = "image/x-icon">
  <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Include jQuery if needed -->
  <title>User Profile</title>
  
</head>

<body>
  <?php
  include('saveImagesController.php');
?>
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

<div class="userProfile">
  <div class="userprofileContent">
      <img src="navImg/user1.png" alt="" class="profilePic">
      <h1><?php echo $firstname; ?></h1>
      <h3><span class="nOfSavedImg"></span> Saved Image(s)</h3>
      <br>
      <h2>Saved Images</h2>
      <button class="goBack"><a href="home.php"> Go Back to Gallery</a></button>
  </div>
  
  
  <center><div class="gallery" id="gallery"></div></center>
  
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
 // Retrieve the saved images from local storage
 const savedImages = JSON.parse(localStorage.getItem('savedImages')) || [];
    
    // Get the gallery element
    const gallery = document.getElementById('gallery');
     // Get the nOfSavedImg element
     const nOfSavedImg = document.querySelector('.nOfSavedImg');

// Set the initial count of saved images
nOfSavedImg.textContent = savedImages.length;
    // Iterate through the saved images and create gallery items
    savedImages.forEach(function (imageUrl) {
      const galleryItem = document.createElement('div');
      galleryItem.classList.add('gallery-item');
  
      const img = document.createElement('img');
      img.src = imageUrl;
  
      const deleteButton = document.createElement('button');
      deleteButton.innerText = 'Remove';
      deleteButton.classList.add('delete-button');
      deleteButton.addEventListener('click', function () {
        deleteImage(imageUrl);
        // Remove the deleted image from the gallery
        gallery.removeChild(galleryItem);
      });
  
      galleryItem.appendChild(img);
      galleryItem.appendChild(deleteButton);
  
      gallery.appendChild(galleryItem);
    });
  
    function deleteImage(imageUrl) {
      // Retrieve the saved images from local storage
      const savedImages = JSON.parse(localStorage.getItem('savedImages')) || [];

      // Find the index of the image URL in the saved images array
      const index = savedImages.indexOf(imageUrl);
      if (index > -1) {
        // Remove the image URL from the saved images array
        savedImages.splice(index, 1);

        // Update the saved images in local storage
        localStorage.setItem('savedImages', JSON.stringify(savedImages));

        // Update the count of saved images
        nOfSavedImg.textContent = savedImages.length;

        // Show a notification that the image is deleted (optional)
        showNotification('Image deleted successfully.');

        // You can perform any other desired action here.
        // For example, you can update the displayed images or refresh the gallery.
      }
    }
  
    function showNotification(message) {
  // Create a notification element
  const notification = document.createElement('div');
  notification.classList.add('notification');
  notification.innerText = message;

  // Append the notification below the gallery element
  const gallery = document.getElementById('gallery');
  gallery.insertAdjacentElement('afterend', notification);

  // Remove the notification after a certain duration (e.g., 3 seconds)
  setTimeout(function () {
    notification.remove();
  }, 3000);
}





    //nav

    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
      subMenu.classList.toggle("open-menu")
    }
    $(document).ready(function() {
      // Send an AJAX request to your PHP file on page load
      $.ajax({
        url: 'saveImagesController.php',
        type: 'GET', // Change this to 'POST' if needed
        dataType: 'json', // Change this based on your response type
        success: function(response) {
          // Process the response here (optional)
          console.log(response);
          
          let imageResult = response.map(function(image) {
            return "images/" + image;
          });

          console.log(imageResult);

          // Create <img> elements for each image and append them to a container (e.g., a <div>)
          const container = document.getElementById("gallery");
          imageResult.forEach(function(imagePath) {
            console.log(imagePath);

            imgElement = document.createElement("img");
            imgElement.src = imagePath;
            imgElement.alt = "Saved Image";
            container.appendChild(imgElement);
          });

        },
        error: function(xhr, status, error) {
          // Handle the error here (optional)
          console.log(error);
        }
      });
    });
  </script>
</body>
</html>
