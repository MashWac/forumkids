<?= $this->extend('Parents/parentframe')?>
<?=$this->section('parentcontent')?>
<div class="card">
        <div class="card-header">
            <h4>User Profile</h4>
        </div>
        
        <div class="card-body">
        </div>
</div>
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
                    <div class="card">
                        <div class="card-body">
                                <span><?=$item['title']?></span>
                                <span><?=$item['main_comment']?></span>
                        </div>
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
    </div>
<?=$this->endSection()?>