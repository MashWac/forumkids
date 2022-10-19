<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexButtons</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/navandfooter.css');?>">


    <style>
        .parent{
            margin-left:45%;
            margin-top:8%;
            margin-bottom:5%;
            padding-bottom:0.5%;
            
        
        }

        .child{
            margin-left:46%;
            margin-top:8%;
        }

        .btnopts{
            border-radius:20px;
            border:2px solid grey;
            font-size:20px;

        }

        .btnopts:hover{
            color:white;
            font-size:25px;
        }

        img{
            width:100px;
            height:100px;
        }
        

        </style>
</head>
<body>
    <div class="logo">
<img src="assets/images/logo.png">
    </div>
<div class="parent">
    <a href="parentregister"> <button class="btnopts" style="background-color:lightblue">PARENT</button></a>
    <br></br>
</div>

<hr></hr>

<div class="child">
    <a href="childregistration_pg"> <button class="btnopts" style="background-color:lightblue;">CHILD</button></a>
    <br></br>
</div>
<?php include(APPPATH.'Views\templates\footer.php'); ?>
