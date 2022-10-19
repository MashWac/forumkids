<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>Edit Content</h4>
        </div>
        <div class="card-body">
                <?php if($formtype=="book"):?>
                <form action="<?= base_url('editbookinfo')?>" method="POST" enctype="multipart/form-data">
                    <?php foreach($book as $item):?>
                        <div class="row">
                        <input type="hidden" value="<?= $item['book_id']?>" name="book_id">
                        <div class="col-md-12">
                            <label>Choose Book Image:</label>
                            <input type="file" name="book-image" id="image"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Choose Book:</label>
                            <input type="file" name="book" id="book"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Title:</label><br><br>
                            <input type="text" name="title" class="form-control" value="<?= $item['title']?>" >
                        </div>
                        <div class="col-md-12">
                            <label>Book Description:</label>
                            <input type="text" name="book_description" value="<?= $item['book_description']?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Author:</label>
                            <input type="text" name="author" value="<?= $item['author']?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Publisher:</label>
                            <input type="text" name="publisher" value="<?= $item['publisher']?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Publish Year:</label>
                            <input type="number" name="publish_year" value="<?= $item['publish_year']?>"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    <?php endforeach;?>
                </form>
                <?php elseif($formtype=="quiz"):?>
                    <form action="<?= base_url('editquiz/2')?>" method="POST" enctype="multipart/form-data">
                    <?php foreach($quiz as $item):?>
                        <div class="row">
                            <input type="hidden" value="<?= $item['quiz_id']?>" name="quiz_id">
                        <div class="col-md-12">
                            <label>Choose File:</label>
                            <input type="file" name="fileupload" id="fileupload"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Name:</label><br><br>
                            <input type="text" name="filename" value="<?= $item['quiz_name']?>"   class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                    <?php endforeach;?>
                </form>
                <?php else:?>
                    <form action="<?= base_url('editquiz/1')?>" method="POST" enctype="multipart/form-data">
                    <?php foreach($puzzle as $item):?>

                        <div class="row">
                        <input type="hidden" value="<?= $item['puzzle_id']?>" name="puzzle_id">
                        <div class="col-md-12">
                            <label>Choose File:</label>
                            <input type="file" name="fileupload" id="fileupload"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Name:</label><br><br>
                            <input type="text" name="filename" value="<?= $item['puzzle_name']?>" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                    <?php endforeach;?>
                </form>
                <?php endif;?>
            </div>
    </div>
<?=$this->endSection()?>