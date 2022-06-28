<?= $this->extend('Parents/parentframe')?>
<?=$this->section('parentcontent')?>
    <div class="row justify-content-md-center">
        <h1 class="headre py-4" id="welphome">Welcome <?php echo $parent['parent_name']?>!!</h1>
    </div>
                <div class="card">
                    <div class="card-body py-4">
                                    <h5>Add a child</h5>
                                    <div class="col-md-6">
                                        <a href="p-add-user">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </a>
                                    </div>
                        <div class="card-body">
                                <h3 >List Of Kids</h3>
                                <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        <th>#Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
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
                                        <td><?=$item['age']?></td>
                                        <td><?=$item['gender']?></td>
                                        <td><?=$item['created_at']?></td>
                                        <td><?=$item['updated_at']?></td>
                                        <td>
                                            <a href="<?=base_url('p-view-user/'.$item['kid_id'])?>">
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