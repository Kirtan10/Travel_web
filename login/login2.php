<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="registration.php" method="post">
                <h1>Create Account</h1>
                
                <span>Or use your email for registration</span>
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
                <input type="password" placeholder="password">
                <button type="submit" class="btn btn-primary">SIGNUP</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="validation.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social1"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social1"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social1"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>Or use your account</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forgot your Password</a>
                <a class="button" href="../index.html">Sign in</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start travelling with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="main.js"></script>
</body>
</html>