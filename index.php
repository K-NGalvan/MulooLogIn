<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Muloo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form action="includes/login.inc.php" method="post" class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email / User Name</span>
        <input type="text" name="uid" >
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pwd">
      </label>
      <button class="submit" name ="submit" type="submit">Sign In</button>
     
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New to Muloo?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already have a Muloo account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="includes/signup.inc.php" method="post" class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>User Name</span>
          <input type="text" name ="uid" >
        </label>
        <label>
          <span>Email</span>
          <input type="email" name = "e_mail" >
        </label>
        <label>
          <span>Password</span>
          <input type="password" name = "pwd" >
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name = "confirmPwd" >
        </label>
        <button type="submit" name ="submit" class="submit">Sign Up Now</button>
      </form>
    </div>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>