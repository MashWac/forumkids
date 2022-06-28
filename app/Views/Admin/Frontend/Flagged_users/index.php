<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h2> Flagged Users Page</h2>
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