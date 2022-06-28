<?= $this->extend('Parents/parentframe')?>
<?=$this->section('parentcontent')?>
<div class="card">
        <div class="card-header">
            <h4>Add Child</h4>
        </div> 
        <div class="card-body">
            <form action="<?=base_url('p-user-add')?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Kid's Name:</label>
                        <input type="text" class="form-control" name="kidname">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Kids Email:</label>
                        <input type="email" class="form-control" name="email">
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
                        <label for="kidage">Age:</label>
                        <input type="number" class="form-control" name="age">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?=$this->endSection()?>