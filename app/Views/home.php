<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "imgs/logo.png"  type = "image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/homestyle.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navandfooter.css');?>">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<?php include(APPPATH.'Views\templates\navbar.php'); ?>
    <div class="midpart">
        <img src="/assets/images/imgs/logo.png" height="300px" width="300px" class="pic1">
        <div class="text">
            <h1>JOY SUN BEAR</h1>
            <h3>See the world with joy</h3>
            <h3>Global education for kids</h3>
        </div>
        <img src="/assets/images/imgs/pic1.png" height="300px" width="400px" class="pic2">
    </div>

<div class="cont">
    <div class="container">
        <div class="grid-item"style="background-image: url('/assets/images/imgs/read2.png');"><a href="read.html" class="links">READ</a></div>
        <div class="grid-item"style="background-image: url('/assets/images/imgs/comm.png');"><a href="https://joysunbear.com/raising-global-citizens/" class="links">Global Community</a></div>
        <div class="grid-item"style="background-image: url('/assets/images/imgs/games.png');"><a href="https://joysunbear.com/play-and-learn/" class="links">Play and learn</a></div>
        <div class="grid-item"style="background-image: url('/assets/images/imgs/friends.png');"><a href="https://joysunbear.com/joys-adventures/" class="links">Meet and Joysun and Friends</a></div>
        <div class="grid-item"style="background-image: url('/assets/images/imgs/europe.png');"><a href="https://joysunbear.com/explore-with-joy/" class="links">Virtual World TOUR</a></div>
        <div class="grid-item"style="background-image: url('/assets/images/imgs/classroom.png');"><a href="https://joysunbear.com/global-classroom-engagement/" class="links">Friendly Classroom</a></div>
    </div>

        <div class="rec"> Recommended Books: </div>

    <div class="cont2">
            <div class="grid-item"style="background-image: url('/assets/images/imgs/Frontcover.png');"></div>
            <div class="grid-item"style="background-image: url('/assets/images/imgs/book2.png');"></div>
            <div class="grid-item"style="background-image: url('/assets/images/imgs/images.jpg');"></div>
    </div>
            
</div>
<?php include(APPPATH.'Views\templates\footer.php'); ?>
