<div class="container p-1" >

    <div class="card-img mt-5 mb-4">
            <img src="assets/images/red.gif" alt="Please check internet" style="width:100%;">
    </div>
    <div class="mt-3">
        <button action="none" class="border border-none bg-danger text-white">Khmer</button>
        <small>29mn ago - WOLRD NEWS</small>
    </div>
    <div class="body">
        <?php
            require_once('inc/database.php');
            $posts = khmer();
            foreach($posts as $post):
        ?>
        <div class="row p-2">
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
                    <a href="?page=khmer_detail&khmer_id=<?= $post['post_id'] ?>">
                        <h3 class="card-title"><?= $post['title']?></h3>
                    </a>
                    <h5 class="card-text"><?= $post['short']?></h5>
                </div>
                </div>
            </div>   
        </div>
        <?php endforeach; ?>
    </div>

</div>