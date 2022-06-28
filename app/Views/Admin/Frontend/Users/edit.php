<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>Edit user</h4>
        </div>
        <div class="card-body">
                <?php if($formtype=="admin"):?>
                <form action="<?=base_url('update/admin')?>" method="POST">
                    <?php foreach ($user as $item):?>
                    <div class="row">
                        <input type="number" hidden class="form-control" name="user_id" value="<?=$item['admin_id']?>">

                        <div class="col-md-6">
                            <label for="adminname">Name:</label>
                            <input type="text" class="form-control" name="adminname" value="<?=$item['admin_name']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email"value="<?=$item['admin_email']?>">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <?php endforeach;?>
                </form>
                <?php elseif($formtype=="parent"):?>
                    <form action="<?=base_url('update/parent')?>" method="POST">
                    <?php foreach ($user as $item):?>
                    <div class="row">
                        <input type="number" hidden class="form-control" name="user_id" value="<?=$item['parent_id']?>">

                        <div class="col-md-6">
                            <label for="parentname">Name:</label>
                            <input type="text" class="form-control" name="parentname" value="<?=$item['parent_name']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" value="<?=$item['parent_email']?>">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <?php endforeach;?>
                    </form>
                <?php else:?>
                    <form action="<?=base_url('update/kid')?>" method="POST">
                    <?php foreach ($user as $item):?>
                        <input type="number" hidden class="form-control" name="user_id" value="<?=$item['kid_id']?>">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="kidname" value="<?=$item['kid_name']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Kids Email:</label>
                                <input type="email" class="form-control" name="email" value="<?=$item['kid_email']?>">
                            </div>
                            <div class="col-md-12">
                                <label for="Gender">Gender:</label>
                                <?php if($item['gender']=="male"):?>
                                <div class="form-check">
                                    <input  type="radio" name="gender" id="Male" value="Male" checked>
                                    <label for="Male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input  type="radio" name="gender" id="Female" value="Female">
                                    <label  for="Female">Female</label>
                                </div>
                                <?php else:?>
                                    <div class="form-check">
                                    <input  type="radio" name="gender" id="Male" value="Male" >
                                    <label for="Male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input  type="radio" name="gender" id="Female" value="Female" checked>
                                    <label  for="Female">Female</label>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <label for="kidage">Age:</label>
                                <input type="number" class="form-control" name="age" value="<?=$item['age']?>">
                            </div>
                            <div class="col-md-6">
                                <label for="parentemail">Parents Email</label>
                                <input type="email" class="form-control" name="parentemail" value="<?=$item['parent_email']?>">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </form>
                <?php endif;?>
            </div>
    </div>
<?=$this->endSection()?>