<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
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
                        <h5 class="card-title"><?=$item['title']?></h5>
                        <p class="card-text"><?=$item['main_comment']?></p>
                        <a href="<?=base_url('deleteforum/'.$item['forum_id'])?>" class="btn btn-primary">Delete forum</a>
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
                            <p class="card-text"><?=$item['comment_post']?></p>
                            <a href="<?=base_url('deletecomment/'.$item['comment_id']).'/'.$item['forum']?>" class="btn btn-primary">delete comment</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                    </div>
            </div>
            
        </div>
    </div>
<?=$this->endSection()?>