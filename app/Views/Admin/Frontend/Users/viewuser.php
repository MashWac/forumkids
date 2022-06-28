<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>User Profile</h4>
        </div>
        
        <div class="card-body">
        </div>
</div>
<?php if($user=="parent"):?> 
           <div class="card">
            <div class="card-header">
                <span><?= $parent['parent_name']?></span>
                <span><?=$parent['created_at']?></span>
            </div>
            <div class="card-body">
                <?php foreach($kids as $item):?>
                <div class="card">
                    <div class="card-body">
                        <span><?=$item['kid_name']?></span>
                        <span><?=$item['kid_email']?></span>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <?php else:?>
            <div class="card">
            <div class="card-header">
                <span><?= $kid['kid_name']?></span>
                <span><?=$kid['created_at']?></span>
            </div>
            <div class=card-body>
                <div class="card">
                    <div class="card-header">
                        <h6>User Forums</h6>
                    </div>
                    <div class="card-body">
                        <?php foreach($forum as $item):?>
                            <div class="card-body">
                                <h5 class="card-title"><?=$item['title']?></h5>
                                <p class="card-text"><?=$item['main_comment']?></p>
                                <a href="<?=base_url('forumdets/'.$item['forum_id'])?>" class="btn btn-primary">View forum</a>
                                <a href="<?=base_url('deleteforum/'.$item['forum_id'])?>" class="btn btn-danger">Delete forum</a>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>User Comments</h6>
                    </div>
                    <div class="card-body">
                        <?php foreach($comments as $item):?>
                        <div class="card">
                            <div class="card-header">
                            <span><?=$item['title']?></span>
                            </div>
                            <div class="card-body">
                                 <span><?=$item['comment_post']?></span>
                                 <span><?=$item['commentcreated_at']?></span>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>

            <?php endif;?>
    </div>
<?=$this->endSection()?>