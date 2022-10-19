<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="/assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/navandfooter.css');?>">

	<link rel="icon" type="image/x-icon" href="../../images/favicon.jpeg">
<style>
	.container{
    background-color:aliceblue;
	}
	.ftco-section{
		background-color:aliceblue;
	}
	</style>

	</head>
	<body>
	<?php include(APPPATH.'Views\templates\navbar.php'); ?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">Sign In</h3>
		      		</div>
							<div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="https://www.facebook.com/joysunbear/" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="https://twitter.com/JoySunBear" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
								</p>
							</div>
		      	</div>
				  	<form action="<?=base_url('signin')?>" method="POST">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="email_address" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>
				
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Save Password
									  <input type="checkbox" >
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-100 d-flex justify-content-end">
		            	<input type="submit" value="Login" class="btn btn-primary rounded submit" name="login">
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? <a href="<?=base_url('regoptions')?>">Sign Up</a></p>
									<p><a href="<?=base_url('regoptions')?>">Forgot Password</a></p>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <?php include(APPPATH.'Views\templates\footer.php'); ?>


