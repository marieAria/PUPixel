var savedImages = document.currentScript.getAttribute('data-saved-images');
let currentStart = 26;
const imagesPerContainer = 25;
const totalImages = 87; // Modify based on the number of images in the file.

function generateImgContainer(start, end) {
  const elements = document.querySelectorAll('.container');
  const parentElement = elements[elements.length - 1];
  const imageFolder = 'images/';

  for (let i = start; i <= end; i++) {
    const imgContainer = document.createElement('div');
    imgContainer.classList.add('imgContainer');

    const img = document.createElement('img');
    img.setAttribute('src', `${imageFolder}${i}.jpg`);
    imgContainer.appendChild(img);

    const btnSave = document.createElement('button');
    btnSave.classList.add('btnSave');
    btnSave.innerText = 'Save';
    btnSave.addEventListener('click', function () {
      saveImage(img.src);
    });
    imgContainer.appendChild(btnSave);

    const btnDownload = document.createElement('button');
    btnDownload.classList.add('btnDownload');
    btnDownload.innerText = 'Download';
    btnDownload.addEventListener('click', function () {
      downloadImage(img.src);
    });
    imgContainer.appendChild(btnDownload);

    // Add click event listener to the image for popup
    img.addEventListener('click', function () {
      showPopup(img.src);
    });

    parentElement.appendChild(imgContainer);
  }
}

function generateNewContainer() {
  const newContainer = document.createElement('div');
  newContainer.classList.add('container');
  const outer = document.querySelector('.outer');
  outer.appendChild(newContainer);
}

window.addEventListener('scroll', function () {
  const pageHeight = document.documentElement.scrollHeight;
  const windowHeight = window.innerHeight;
  const scrollPosition = window.scrollY + windowHeight;

  if (scrollPosition === pageHeight) {
    const start = currentStart;
    const end = Math.min(start + imagesPerContainer - 1, totalImages);
    generateNewContainer();
    generateImgContainer(start, end);
    currentStart = (end % totalImages) + 1;
  }
});

// Show popup function
function showPopup(imgSrc) {
  // Create a new image element for the popup
  var popupImg = document.createElement('img');
  popupImg.src = imgSrc;

  // Create a new div element for the popup
  var popupDiv = document.createElement('div');
  popupDiv.classList.add('popup');
  popupDiv.appendChild(popupImg);

  // Add the popup to the document
  document.body.appendChild(popupDiv);

  // Add a click event listener to the image to close the popup
  popupImg.addEventListener('click', function () {
    // Remove the popup from the document
    document.body.removeChild(popupDiv);
  });
}

// Get all the images in the table
var images = document.querySelectorAll('.imgContainer img');

// Add a click event listener to each image
images.forEach(function (img) {
  img.addEventListener('click', function () {
    showPopup(this.src);
  });
});

// Add a click event listener to the document
document.addEventListener('click', function (event) {
  // If the click was not on an image or inside a popup, remove the popup
  if (!event.target.matches('.imgContainer img') && !event.target.matches('.popup *')) {
    var popups = document.querySelectorAll('.popup');
    popups.forEach(function (popup) {
      document.body.removeChild(popup);
    });
  }
});



function saveImage(imageUrl) {
  const filename = imageUrl.split("/").pop();
  console.log(filename);

  // Send an AJAX request to your PHP file
  $.ajax({
    url: 'homeSaveImage.php',
    type: 'GET',
    dataType: 'text',
    data: { filename: filename }, // Pass the filename as a parameter to the PHP script
    success: function(response) {
      // Process the response here
      console.log(response);

      // Access the userID from the response
      const userID = response.userID;

      // Now you can use the userID as needed in your JavaScript code
      console.log("User ID:", userID);

      // For example, you can use the userID to customize behavior based on the user
      // or perform other operations.
    },
    error: function(xhr, status, error) {
      // Handle the error here (optional)
      console.log(error);
    }
  });
}





function downloadImage(imageUrl) {
  const link = document.createElement('a');
  link.href = imageUrl;
  link.download = 'image.jpg';
  link.target = '_blank';
  link.click();
}

//nav

let subMenu = document.getElementById("subMenu");

function toggleMenu(){
subMenu.classList.toggle("open-menu")
}




generateImgContainer(1, 25);

