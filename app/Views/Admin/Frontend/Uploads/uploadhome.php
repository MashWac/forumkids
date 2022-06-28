<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>Select Content Type</h4>
        </div>
        <div class="card-body">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Upload Puzzles & Quizes</h5>
                    <a href="<?= base_url('addcontent/puzzle')?>" class="btn btn-primary">Create</a>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Upload Books</h5>
                    <a href="<?= base_url('addcontent/book') ?>" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
    </div>
<?=$this->endSection()?>