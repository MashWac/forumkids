<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <?php if($upload=='book'):?>
        <div class="card-header">
            <h4>Upload New Books</h4>
        </div>
        <div class="card-body">
        <form action="<?= base_url('uploadinfo')?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
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
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Book Description:</label>
                            <input type="text" name="book_description" placeholder="Book Description" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Author:</label>
                            <input type="text" name="author" placeholder="Author" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Publisher:</label>
                            <input type="text" name="publisher" placeholder="Publisher" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Publish Year:</label>
                            <input type="number" name="publish_year" placeholder="Publish Year" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php else:?>
                <div class="card-header">
                <h4>Upload New Quiz or puzzle</h4>
                </div>
                <div class="card-body">
                <form action="<?= base_url('uploadquiz')?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-md-12">
                            <label for="content">Puzzle or Quiz?:</label><br>
                            <select class="combo" name="content">
                                <option value="puzzle">puzzle</option>
                                <option value="quiz">quiz</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Choose File:</label>
                            <input type="file" name="fileupload" id="fileupload"class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label>Name:</label><br><br>
                            <input type="text" name="filename" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php endif;?>
                
    </div>
<?=$this->endSection()?>