<div class="container p-1">    
    <div class="card-img mt-5 mb-5">
        <img src="assets/images/sky.gif" alt="Please check internet" style="width:100%;">
    </div>
    <div class="mt-3">
        <button action="none" class="border border-none bg-danger text-white">Sport</button>
        <small>29mn ago - WOLRD NEWS</small>
    </div>
    <div class="body">
        <div class="row p-1">
            <?php
                require_once('inc/database.php');
                $posts = sport();
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
                    <a href="?page=sport_detail& sport_id=<?= $post['post_id'] ?>">
                        <h3 class="card-title"><?= $post['title']?></h3>
                    </a>
                    
                    <h5 class="card-text"><?= $post['short']?></h5>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div> 
    </div>       
</div>