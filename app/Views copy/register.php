<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.jpeg">
    <link rel="stylesheet" href="registration.css">
    <style>
        .combo {
    padding: 10px;
}
.one{
    background-color:white;
}

form {
    margin-top: 6%;
    margin-left: 25%;
    margin-right: 20%;
    background-color: white;
    border-radius: 2%;
}

label {
    color: black;
    margin-left: 33%;
}

input {
    margin-left: 33%;
    border-radius: 15%;
    block-size: 20px;
    display: block;
}

select {
    margin-left: 33%;
}

body {
    background-image: url("images/joysunbearlogo.png");
    background-repeat: no-repeat;
    background-size: 8%;
    background-color: white;
    margin-top: 20%;
}

button {
    font-size: 100%;
    margin-left: 40%;
    background-color: aliceblue;
    border: 3px solid black;
    border-radius: 15px;
}

.edge {
    background-color: aliceblue;
    margin-top: 10%;
    margin-bottom: -10%;
    margin-left: -5%;
    margin-right: -5%;
    padding: 2%;
}

.edge p {
    margin-left: 40%;
    margin-top: 1.5%;
    font-size: 120%;
}

img {
    margin-top: 0.5%;
    margin-left: 3.5%;
}

.nav {
    background-color:#004E63;
    overflow:hidden;
    margin-top:-260px;
    margin-right:-5%;
    margin-left:-0.8%;
    position:relative;
    

    
}

.nav a {
    float: right;
    color: black;
    text-align:center;
    padding: 12px 14px;
    padding-top:100px;
    text-decoration: none;
    font-size:18px;
    margin-right:5%;
}

.nav a.active:hover {
    
    color: black;
}

.nav a.active {
    background-color:#004E63;
    color:white;
    
}

.edge a {
    margin: 2px 2px;
}

.edge h5 {
    margin-left: 10%;
}
img {
width:100px;
    height:100px;
    margin-left:5%;
}

.icons {
    margin-left:39%;
}

.heading{
    margin-left:41%;
}
</style>
</head>

<body>
    <!--Main content for Reg form-->

    <!--Navigation Bar-->
    <div class="nav">
    <img src="<?php echo base_url('assets/images/logo.png'); ?>" class="logo">
        <a href="#" class="active">About us</a>
        <a href="#" class="active">Read</a>
        <a href="#" class="active">Play Games</a>
        <a href="#" class="active">Home</a>
    </div>
    <br></br>
    <br></br>

    <div class="one">
        <p style="color:black;margin-left:47%;font-size:150%;">REGISTER</p><br>
        <p style="color:black;margin-left:39%;font-size:120%;">Please fill in this form to create an account</p>


        <form action="registrationvalid.php" target="_self" method="post">
            <label for="name">Name</label><br>
            <input type="text" size="30" id="name" name="name" title="Enter your name"><br></br>

            <label for="email">Email</label>
            <input type="email" id="email" name="parentemail" size="30" maxlength="60" required placeholder="username@gmail.com" pattern=".+gmail\.com" title="provide only an email address with 'gmail.com'"><br></br>

            <label for="password">Password</label><br>
            <input type="password" size="30" id="password" name="password" title="Enter Password"><br>

          <input type="submit" title="Click to register"><br></br>
            <p style="margin-left:33%;">If you already have an account <a href="<?=base_url('login')?>">Sign In</a></p>
        </form>
    </div>

    <footer class="edge">
        <img src="assets/images/JSB_Logo.png" alt="joysunbearlogo" style="width:15%;height:15%"><br></br>
      <div class="heading">
        <h5>
            <ims>FOLLOW US</ims>
        </h5>
</div>
        <!-- Social media icons-->
        <div class="icons">
        <a href="https://www.instagram.com/joy_sun_bear/">
            <img src="assets/images/instaicon.png" alt="instagram logo" style="width:2%;height:2%;">
        </a>
        <a href="https://www.pinterest.com/joysunbear/">
            <img src="assets/images/pinterest.png" alt="pinterest logo" style="width:2%;height:2%;">
        </a>
        <a href="https://www.facebook.com/joysunbear/">
            <img src="assets/images/facebooklogo.png" alt="facebook logo" style="width:2%;height:2%;">
        </a>
        <a href="https://twitter.com/JoySunBear">
            <img src="assets/images/twitter.png" alt="twitter logo" style="width:2%;height:2%;">
        </a>
</div>


        <p><span>&copy</span>Copyright 2022. All rights reserved</p>


    </footer>
</body>

</html>