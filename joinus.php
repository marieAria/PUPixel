<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="joinus.css">
    <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="register-card">
        <div class="column">
            <h1>Join Us Now!</h1>
            <p>Be one of us! Complete your registration to enjoy exclusive priviledges</p>
            <form action="register.php" method="POST">
    <div class="form-item">
        <input type="text" class="form-element" placeholder="First Name" required name="firstname">
    </div>
    <div class="form-item">
        <input type="text" class="form-element" placeholder="Surname" required name="lastname">
    </div>
    <div class="form-item">
        <input type="email" class="form-element" placeholder="Email" required name="email">
    </div>
    <div class="form-item">
        <input type="password" class="form-element" placeholder="Password" required name="password">
    </div>
    <div class="form-checkbox-item">
        <input type="checkbox" id="agree" required>
        <label for="agree">I agree to the <a href="#">Terms &amp; Conditions | Privacy Policy</a></label>
    </div>
    <div class="flex">
        <button type="submit"><a href="register.php" style="text-decoration: none;color:white;"> Create Account</a></button>
    </div>
    <p style="margin-top: 1.5rem; margin-bottom: 1.5rem;">Register using your Social Media</p>
    <div class="social-buttons">
        <a href="#" class="facebook">
            <span class="fab fa-facebook-f"></span>
        </a>
        <a href="#" class="google">
            <span class="fab fa-google"></span>
        </a>
    </div>
</form>

        </div>
        <div class="column">
            <h2>Welcome to Pixel!</h2>
            <p>A place to experience the beauty of Polytechnic University of the Philippines through stunning photography.</p>
            <p>Already have an account?</p>
            <a href="loginform.php">Login Here!</a>
        </div>
    </div>
    
</body>
</html>