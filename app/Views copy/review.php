<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/new.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="body">

    <?php include(APPPATH.'Views\templates\navbar.php'); ?>

    <div class="box">
        <div class="reviews">

        <button id="add_rating" class="btn btn-info" name="rate">Add Rating</button>

        <?php if($book_data): ?>
          <?php foreach($book_data as $books): ?>
          <div class="container" id="buttonContainer">
            <div class="books">
            <h2 class="text-center" id="book"><?=$books['title']; ?></h2>
            <p class="text-center"><?=$books['book_description']; ?></p>

          </div>

        </div>
          <?php endforeach ?>
              <?php endif ?>

        <div class="bg-modal">
                <div class="modal-contents">
                  <div class="close">+</div>
                  <div class="rating-wrap">
                  <h2>Pick a book and add a rating</h2>
                  </div>
                  <div class="rating-wrap">

              <form method="POST" action="add_rating" enctype="multipart/form-data">

              <select name="book_id">
                  <?php if($book): ?>
          <?php foreach($book as $bookss): ?>
            <option value='<?= $bookss['book_id']; ?>'><?= $bookss['title'];?></option>";
            <?php endforeach ?>
              <?php endif ?>
              </select>

              <?= csrf_field(); ?>
              <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5"/>
                <label for="star5" class="full" title="Awesome"></label>
                <input type="radio" id="star4.5" name="rating" value="4.5"/>
                <label for="star4.5" class="half"></label>
                <input type="radio" id="star4" name="rating" value="4"/>
                <label for="star4" class="full"></label>
                <input type="radio" id="star3.5" name="rating" value="3.5"/>
                <label for="star3.5" class="half"></label>
                <input type="radio" id="star3" name="rating" value="3"/>
                <label for="star3" class="full"></label>
                <input type="radio" id="star2.5" name="rating" value="2.5"/>
                <label for="star2.5" class="half"></label>
                <input type="radio" id="star2" name="rating" value="2"/>
                <label for="star2" class="full"></label>
                <input type="radio" id="star1.5" name="rating" value="1.5"/>
                <label for="star1.5" class="half"></label>
                <input type="radio" id="star1" name="rating" value="1"/>
                <label for="star1" class="full"></label>
                <input type="radio" id="star0.5" name="rating" value="0.5"/>
                <label for="star0.5" class="half"></label>
              </fieldset>
              <button type="submit" id="submit" class="btn btn-info" name="rate">Submit</button>

            </div>
            <h4 id="rating-value"></h4>
          </div>
          <?php if(!empty(session()->getFlashdata('fail'))): ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>
      <?php if(!empty(session()->getFlashdata('success'))): ?>
          <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
          </form>
          <script src="assets/js/forum.js"></script>
    </div>
    </div>
        
      </div>
    </div>
  </body>
</html>