<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h2> Uploads Page</h2>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List Of Books</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Year</th>
                        <th>Book Image</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($books as $item):?>
                    <tr>
                        <td><?=$item['book_id']?></td>
                        <td><?=$item['title']?></td>
                        <td><?=$item['author']?></td>
                        <td><?=$item['publisher']?></td>
                        <td><?=$item['publish_year']?></td>
                        <td><img src='<?="../upload/".$item['book_image']?>'alt="Image" height="100px" width="100px"></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('editcontent/'.$item['book_id'].'/1')?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('deletecontent/'.$item['book_id'].'/1')?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
          
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List of Puzzles</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($puzzles as $item):?>
                    <tr>
                        <td><?=$item['puzzle_id']?></td>
                        <td><?=$item['puzzle_name']?></td>
                        <td><?=$item['created_at']?></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('editcontent/'.$item['puzzle_id'].'/2')?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('deletecontent/'.$item['puzzle_id'].'/2')?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
          
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List Of Quizes</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($quizes as $item):?>
                    <tr>
                        <td><?=$item['quiz_id']?></td>
                        <td><?=$item['quiz_name']?></td>
                        <td><?=$item['created_at']?></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('editcontent/'.$item['quiz_id'].'/3')?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('deletecontent/'.$item['quiz_id'].'/3')?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
                </table>
        </div>
    </div>
<?=$this->endSection()?>