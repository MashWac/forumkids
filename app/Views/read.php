<!Doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navandfooter.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/land.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,400&family=Trispace:wght@800&display=swap" rel="stylesheet">

  </head>
  <body>
  <?php include(APPPATH.'Views\templates\navbar.php'); ?>
  <div class="container-fluid py-3">
  <div id="landingread" class="col">
    <div id="landread">
        <p id="message">Great Books To Read and Grow Your Knowledge</p>
    </div>
  </div>
  <div class="row py-5">
  <?php foreach($books as $item):?>

  <div class="col-sm-4">
    <div class="card">
    <img src='<?="../upload/".$item['book_image']?>' height="390px" class="card-img-top" alt="care">
      <div class="card-body">
        <h5 class="card-title"><?php echo($item['title'])?></h5>
        <p class="card-text"><?php echo($item['book_description'])?></p>
        <a href="<?=base_url('view-file/'.$item['book'])?>">
          <button type="button" class="btn btn-primary"  style="background-color: #0feded;">Download Book</button>
        </a>      
      </div>
    </div>
  </div>
  <?php endforeach;?> 

</div>
</div>
   
  <?php include(APPPATH.'Views\templates\footer.php'); ?>
