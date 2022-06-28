<!doctype html>
<html lang="en">
  <head>
    <title>Forum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/comment.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
    
    <div class="card">
        <div class="card-header">
            <h4>Forum Activity</h4>
        </div>
        
        <div class="card-body">
        </div>
</div>
<div class="card">
        <div class="card-body">
                <?php foreach($forum as $item):?>
                <div class="card">
                    <div class="card-header">
                        <span><?=$item['kid_name']?></span>
                        <span><?=$item['created_at']?></span>
                        <span><ion-icon name="flag"></ion-icon></span>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/forum/deleteforum/<?=$item['forum_id']?>">
                            <h5 class="card-title"><?=$item['title']?></h5>
                            <p class="card-text"><?=$item['main_comment']?></p>
                            <button class="btn btn-primary">Delete</button>
                        </form>
                        <form method="post" action="/forum/flagforum/<?=$item['forum_id']?>">
                                <button class="btn btn-primary">Flag forum</button>
                        </form>
                        <form method="post" action="/forum/unflagforum/<?=$item['forum_id']?>">
                                <button class="btn btn-primary">UNflag forum</button>
                        </form>    
                    </div>
                    <div class="mb-3">
                        <div id="Reply">
                            <form method="post" action="/forum/addComment/<?=$item['forum_id']?>">
                            <label for="exampleFormControlTextarea1" class="form-label">Reply</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment_post"></textarea>
                            <button type="submit" class="btn btn-primary">Reply</button>
                        </form>
                        </div>
        </div>
                </div>
                <?php endforeach;?>
                    <div class="card-body">
                    <?php foreach($comments as $item):?>
                    <div class="card w-75 text-center">
                        <div class="card-header">
                            <span><?=$item['kid_name']?></span>
                            <span><?=$item['commentcreated_at']?></span>
                            <?php if($item['comments_flagged']==1):?>
                            <span><ion-icon name="flag"></ion-icon></span>
                            <?php endif;?>
                        </div>
                        <div class="card-body">
                            <form method="post" action="/forum/deletecomment/<?=$item['comment_id']?>">
                                <p class="card-text"><?=$item['comment_post']?></p>
                               <button class="btn btn-primary">Delete</button>
                            </form>
                            <form method="post" action="/forum/flagcomment/<?=$item['comment_id']?>/<?=$item['forum_id']?>">
                                <button class="btn btn-primary">Flag comment</button>
                            </form>
                            <form method="post" action="/forum/flagcomment/<?=$item['comment_id']?>/<?=$item['forum_id']?>">
                                <button class="btn btn-primary">UnFlag comment</button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach;?>
                    </div>
            </div>
            
        </div>
    </div>
    
    </div>
  </body>
</html>
