<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/63dabc5011.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="R.png" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Welcome Back!</h1>
                <p>Login to your account now.</p>
            </div>
            <form class="login-card-form" action="login.php" method="POST">
                <div class="form-items">
                    <span class="form-items-icon material-symbols-rounded">mail</span>
                   
                    <input id="emailInput" type="email" placeholder="Enter Email" required autofocus name="email">


                </div>
                <div class="form-items">
                   
                    <input id="passwordInput" type="password" placeholder="Enter Password" required name="password">
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit">Login</button>
            </form>
            <div class="login-card-footer">
                Don't have an account yet? <a href="joinus.php">Register here!</a>
            </div>
        </div>
        <div class="login-card-social">
            <div>Other Login Platform</div>
            <div class="login-card-social-btn">
                <a href="#"><span class="fab fa-facebook-f"></span></a>
                <a href="#"><span class="fab fa-google"></span></a>
            </div>
        </div>
    </div>
    <!-- js code -->
    <script>
        function login(event) {
            event.preventDefault(); // Prevent form submission

            // Get the email and password input values
            const email = document.getElementById('emailInput').value;
            const password = document.getElementById('passwordInput').value;

            // Perform email and password validation
            if (email === 'example@example.com' && password === 'password') {
                // Successful login
                window.location.href = 'home.php'; // Redirect to home page
            } else {
                // Invalid credentials
                alert('Invalid email or password. Please try again.');
            }
        }
    </script>

    
</body>
</html>
