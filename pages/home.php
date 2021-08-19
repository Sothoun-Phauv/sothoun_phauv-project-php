<div class="container p-1">
    <!-- Jumbotron -->
    <div class="card-img mt-5 mb-4">
        <img src="assets/images/prince.jpg" alt="Please check internet" style="width:100%;">
    </div>
    <div class="p-2 mb-2 bg-danger text-dark">
        <marquee behavior="" direction="" style="font-size:20px; font-weight:bold; color:white;"><i class='fas fa-backward' style='font-size:20px;color:white; '></i>  CLICK HERE FOR THE LATEST NEWS  <i class='fas fa-forward' style='font-size:20px;color:white;'> </marquee>
    </div>
    <!-- Jumbotron -->
    <!-- card -->
    <div class="row mt-4">
        <?php
            require_once('inc/database.php');
            $posts = post2();
            foreach($posts as $post):
        ?>
        <div class="col-sm-6">
            <div class="card border border-0">
            <div class="card-body ">
                <img src="assets/images/<?= $post['image']?>" alt="" style="width:100%; height:250px;">
                <small><?= $post['date']?></small>
                <h3 class="card-title mt-4"><?= $post['title']?></h3>
                <h5 class="card-text"><?= $post['short']?></h5>
            </div>
            <div class="display-3 d-flex justify-content-end">
                    <a href="process/html_update.php?id=<?= $post['post_id']?>" class="btn btn-primary btn-sm mr-2"><i class="fas fa-pen"></i></a>
                    <a href="process/delete.php?id=<?= $post['post_id']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="body">
        <div class="row p-1">
            <?php
                require_once('inc/database.php');
                $posts = post();
                foreach($posts as $post):
            ?>
            <div class="col-sm-4">
                <div class="card border border-0">
                <div class="card-body">
                    <img src="assets/images/<?= $post['image']?>" alt="" style="width:100%; height:100%;">
                </div>
                </div>
            </div>
            <div class="col-sm-8 mt-3">
                <div class="card border border-0">
                <div class="card-body">
                    <h3 class="card-title"><?= $post['title']?></h3>
                    <h5 class="card-text"><?= $post['short']?></h5>
                </div>
                <div class="display-3 d-flex justify-content-end">
                    <a href="process/html_update.php?id=<?= $post['post_id']?>" class="btn btn-primary btn-sm mr-2"><i class="fas fa-pen"></i></a>
                    <a href="process/delete.php?id=<?= $post['post_id']?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div> 
    </div>       


</div>