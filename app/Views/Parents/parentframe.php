
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      DashBoard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oxygen&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Lora:wght@500&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Open+Sans:ital@0;1&family=Poppins:wght@300;400&family=Raleway:ital,wght@0,400;1,300&family=Red+Hat+Mono&family=Roboto+Condensed&family=Roboto:ital,wght@0,400;1,300&family=Source+Sans+Pro:ital,wght@0,400;1,300&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/user/css/parentstyle.css" rel="stylesheet">

  

</head>
<body>
    <div class="mainbody">
        <?php include('navbar.php');?>
        <div class="content py-4">
            <?= $this->renderSection('parentcontent')?>
        </div>
    </div>
    </div>


<!----scripts---->
  <script src="/assets/admin/js/core/formdisplay.js"></script>
  <script src="/assets/admin/js/core/jquery.min.js"></script>
  <script src="/assets/admin/js/core/popper.min.js"></script>
  <script src="/assets/admin/js/core/bootstrap.min.js"></script>
  <script src="/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <?php if(session('status')):?>
    <script>
    swal("<?php echo(session('status'))?>");
    </script>
    <?php endif;?>
</body>
</html>
