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
            <h4>Child Registration</h4>
        </div>
        <div class="card-body">
        <form action="<?=base_url('registration/child')?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Kid's Name:</label>
                                <input type="text" class="form-control" name="kidname" placeholder="Child Name">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Kid's Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Child Email">
                            </div>
                            <div class="col-md-12">
                                <label for="Gender">Gender:</label>
                                <div class="form-check">
                                    <input  type="radio" name="gender" id="Male" value="Male" checked>
                                    <label for="Male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input  type="radio" name="gender" id="Female" value="Female">
                                    <label  for="Female">Female</label>
                                </div>
                            </div>
                                <div class="col-md-6">
                                <label for="email">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Confirm Password:</label>
                                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                                </div>
                              
                            <div class="col-md-6">
                                <label for="kidage">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Child Age">
                            </div>
                            <div class="col-md-6">
                                <label for="parentemail">Parent's Email</label>
                                <input type="email" class="form-control" name="parentemail" placeholder="Parents Email">
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn" style="background-color: #0feded; margin-top: 30px; margin-left:150px">Register</button>
                                </div>
                            </div>
                        </div>
                        <p class="text-center">Already A Member. <a href="<?=base_url('login')?>">Login</a></p>

                    </form>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include(APPPATH.'Views\templates\footer.php'); ?>

