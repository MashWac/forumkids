<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h2> Users Page</h2>
        </div>
        <div class="card-body">
            <h5>Create A New User</h5>
            <div class="col-md-6">
                <a href="add-user">
                    <button type="submit" class="btn btn-primary">Add</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
                <h3 >List Of Admins</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admins as $item):?>
                    <tr>
                        <td><?=$item['admin_id']?></td>
                        <td><?=$item['admin_name']?></td>
                        <td><?=$item['admin_email']?></td>
                        <td><?=$item['created_at']?></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('Admin/AdminController/edit/'.$item['admin_id'].'/'.$item['admin_role'])?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('delete-user/'.$item['admin_id'].'/'.$item['admin_role'])?>">
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
                <h3 >List Of Parents</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($parents as $item):?>
                    <tr>
                        <td><?=$item['parent_id']?></td>
                        <td><?=$item['parent_name']?></td>
                        <td><?=$item['parent_email']?></td>
                        <td><?=$item['created_at']?></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('view-user/'.$item['parent_id'].'/'.$item['parent_role'])?>">
                                <button type="submit" class="btn btn-success">View Profile</button>
                            </a>
                            <a href="<?=base_url('Admin/AdminController/edit/'.$item['parent_id'].'/'.$item['parent_role'])?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('delete-user/'.$item['parent_id'].'/'.$item['parent_role'])?>">
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
                <h3 >List Of Kids</h3>
                <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Parent/Guardian</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Created</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($kids as $item):?>
                    <tr>
                        <td><?=$item['kid_id']?></td>
                        <td><?=$item['kid_name']?></td>
                        <td><?=$item['kid_email']?></td>
                        <td><?=$item['parent_email']?></td>
                        <td><?=$item['age']?></td>
                        <td><?=$item['gender']?></td>
                        <td><?=$item['created_at']?></td>
                        <td><?=$item['updated_at']?></td>
                        <td>
                            <a href="<?=base_url('view-user/'.$item['kid_id'].'/'.$item['kid_role'])?>">
                                <button type="submit" class="btn btn-success">View Profile</button>
                            </a>
                            <a href="<?=base_url('Admin/AdminController/edit/'.$item['kid_id'].'/'.$item['kid_role'])?>">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                            <a href="<?=base_url('delete-user/'.$item['kid_id'].'/'.$item['kid_role'])?>">
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