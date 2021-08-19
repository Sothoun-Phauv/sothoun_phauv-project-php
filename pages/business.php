<div class="container p-1">
    <div class="card-img mt-5 mb-5">
        <img src="assets/images/prasac.gif" alt="Please check internet" style="width:100%;">
    </div>
    <div class="body">
        <div class="row p-2">
            <?php
                require_once('inc/database.php');
                $posts = business();
                foreach($posts as $post):
            ?>
            <div class="col-sm-4">
                <div class="card border border-0">
                <div class="card-body">
                    <img src="<?= $post['image']?>" alt="" style="width:100%; height:100%;">
                </div>
                </div>
            </div>
            <div class="col-sm-8 mt-3">
                <div class="card border border-0">
                <div class="card-body">
                    <h4 class="card-title"><?= $post['title']?></h4>
                    <p class="card-text"> <?= $post['short']?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
            </div>
        </div>    
        <?php endforeach; ?>
    </div>
</div>