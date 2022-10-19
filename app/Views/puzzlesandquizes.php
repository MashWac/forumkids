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
        <div class="card">
            <div class="card-header">
                <h2>Puzzles and Quizes</h2>
            </div>
        </div>
        <div class="card py-4">
            <div class="card-body">
                    <h3 >Download Puzzles</h3>
                    <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($puzzles as $item):?>
                        <tr>
                            <td><?=$item['puzzle_id']?></td>
                            <td><?=$item['puzzle_name']?></td>
                            <td><?=$item['created_at']?></td>
                            <td>
                                <a href="<?=base_url('view-file/'.$item['puzzle'])?>">
                                    <button type="submit" class="btn btn-primary"  style="background-color: #0feded;">Download</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    </table>
            
            </div>
        </div>
        <div class="card py-2">
            <div class="card-body">
                    <h3 >Download Quizes</h3>
                    <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Name</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($quizes as $item):?>
                        <tr>
                            <td><?=$item['quiz_id']?></td>
                            <td><?=$item['quiz_name']?></td>
                            <td><?=$item['created_at']?></td>
                            <td>
                                <a href="<?=base_url('view-file/'.$item['quiz'])?>?>">
                                    <button type="submit" class="btn btn-primary"  style="background-color: #0feded;">Download</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
<?php include(APPPATH.'Views\templates\footer.php'); ?>

