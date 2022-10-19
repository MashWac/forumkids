<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap CSS -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navandfooter.css');?>">

</head>

<body>
<?php include(APPPATH.'Views\templates\navbar.php'); ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
            <h4>Parent Registration</h4>
        </div>
        <div class="card-body">
        <form action="<?=base_url('registration/parent')?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Parent's Name:</label>
                                <input type="text" id="name" name="parentname" placeholder="Name"><br></br>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Parent's Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="confirmpassword">Confirm Password:</label>
                                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn" style="background-color: #0feded; margin-top: 30px; margin-left:150px">Register</button>
                                </div>
                            </div>
                        </div>
                        <p class="text-center">Already A Member? <a href="<?=base_url('login')?>">Login</a></p>

                    </form>
            </div>
        </div>
        </div>
    </div>
</div>



<?php include(APPPATH.'Views\templates\footer.php'); ?>
