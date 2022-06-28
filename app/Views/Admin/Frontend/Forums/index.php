<?= $this->extend('Admin/layouts/admin')?>
<?=$this->section('content')?>
<div class="card">
        <div class="card-header">
            <h4>Flagged Forums</h4>
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
                        <a href="forumdets/<?=$item['forum_id']?>" class="btn btn-primary">View forum</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="card">
        <div class="card-header">
            <h4>Forums With Flagged Comments</h4>
        </div>
        
        <div class="card-body">
        </div>
    </div>
        <div class="card">
            <div class="card-body">
                <?php foreach($comments as $item):?>
                <div class="card">
                    <div class="card-header">
                        <span><?=$item['kid_name']?></span>
                        <span><?=$item['created_at']?></span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?=$item['title']?></h5>
                        <p class="card-text"><?=$item['main_comment']?></p>
                        <a href="forumdets/<?=$item['forum_id']?>" class="btn btn-primary">View forum</a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
  
    </div>
<?=$this->endSection()?>