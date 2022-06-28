<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-5.12.1-web/css/all.css">
    <title>Sign In</title>
</head>
<body>
    <div class="form-container">
    <form action="action_page.php" method="post">
        <div class="imgcontainer avatar">
            <i class="fas fa-user"></i>
            <p class="sign-in">Sign In</p>
        <!--<img src="./images/img_avatar2.png" alt="Avatar" class="avatar"> -->
        <p class="sign-info">please fill in this form to sign into your account.</p>
        </div>
        
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button class="login-btn" type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
        <div class="foot-container">
            <p>Don't have an account?<span><a href="#">Register</a></span></p>
      </form>
    </div>
      
    
</body>
</html>