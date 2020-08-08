<?php
  require 'includes/info.display.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>BlueBeard</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="includes/login.inc.php" class="sign-in-form" method="post"> <!--Start of sign in form-->
            <h2 class="title">BlueBeard</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="mailuid" placeholder="Username/Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pwd_login" placeholder="Password" />
            </div>
            <button type="submit" class="btn solid" name="login-submit">Login</button>  <!--from input to button-->
            <!--<input type="submit" value="Login" class="btn solid" />-->
            <p class="social-text">Americanism everywhere!</p>
            <!--
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            -->
          </form>                           <!--End of sign in form-->
          <form action="includes/signup.inc.php" class="sign-up-form" method="post"><!--Start of sign up form-->
            <h2 class="title">Sign Up</h2> <!--sign up form label-->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uid" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="mail" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pwd" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pwd-repeat" placeholder="Confirm password"/>
            </div>
            <button type="submit" class="btn solid" name="signup-submit">Seek freedom</button> <!--from input to button-->
            <!--<input type="submit" class="btn" value="Sign up"/>-->
            <!--<p class="social-text">Join the fight for America!</p>--> 
            <!--
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
            -->
          </form>                           <!--End of sign up form-->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New to BlueBeard?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn"> <!--No touch-->
                Sign up
            </button>
          </div>
          <img src="img/data.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already a patriot?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn"> <!--No touch-->
              Sign in
            </button>
          </div>
          <img src="img/barbecue.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

    <!--paste footer here-->


  </body>
</html>