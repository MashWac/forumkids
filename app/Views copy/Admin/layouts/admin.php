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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/assets/admin/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />

</head>
<body>
    <div class="wrapper">
            <?php include('inner/sidebar.php');?>
        <div class="main-panel">
            <?php include('inner/adminnav.php');?>
            <div class="content">
              <?= $this->renderSection('content')?>
            </div>
        </div>
        </div>

        <?php include('inner/adminfooter.php');?>
    </div>


<!----scripts---->

  <script src="/assets/admin/js/core/formdisplay.js"></script>
  <script src="/assets/admin/js/core/jquery.min.js"></script>
  <script src="/assets/admin/js/core/popper.min.js"></script>
  <script src="/assets/admin/js/core/bootstrap.min.js"></script>
  <script src="/assets/admin/js/core/chartjs.min.js"></script>
  <script src="/assets/admin/js/core/loadchart.js"></script>
  <script src="/assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
