<div class="container p-1">
    <div class="row m-3">
        <?php
            require_once('inc/database.php');
            $posts = getThree();
            foreach($posts as $post):
        ?>
        <div class="col-sm-4">
            <div class="card border-0">
            <div class="card-body">
                <img src="assets/images/<?= $post['image']?>" alt="" style="width:100%; height:250px;">
                <small class="mt-2"><?= $post['date']?></small>
                <h5 class="card-title"><?= $post['title']?></h5>
                <h5 class="card-text"><?= $post['short']?></h5>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class=""></div>
    <!-- three line -->
    <div class="row p-4">
        <?php
            require_once('inc/database.php');
            $posts = agriculture();
            foreach($posts as $post):
         ?>
        <div class="col-sm-4">
            <div class="card border border-0">
            <div class="card-body">
                <img src="assets/images/<?= $post['image']?>" alt="" style="width:100%; height:100%;">
            </div>
            </div>
        </div>
        <div class="col-sm-8 mt-1">
            <div class="card border border-0">
            <div class="card-body">
                <small><?= $post['date']?></small>
                <h4 class="card-title"><?= $post['title']?></h4>
                <p class="card-text"><?= $post['short']?></p>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div> 

</div>