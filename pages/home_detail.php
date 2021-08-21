<div class="container p-1">
    <div class="card-img mt-5 mb-4">
            <img src="assets/images/smart.gif" alt="Please check internet" style="width:100%;">
    </div>
    <?php
        require_once('inc/database.php');
        $id = $_GET['home_id'];
        
        $posts = getOneHome($id);
        foreach($posts as $post);
    ?> 
    
    <div>
        <button action="none" class="border border-none bg-danger text-white">Home</button>
        <small><?= $post['date']?> - WOLRD NEWS</small>
    </div>
    
    <div class="card p-4 border border-0">
    <div class="card-body ">
        <h1 class="card-title font-weight-bold" style="font-family: 'Times New Roman', Times, serif;"><?= $post['title']?></h1>
        <img class="text-center" src="assets/images/<?= $post['image']?>" alt="" style="width:100%;">
        <h5 class="card-text mt-5" style="font-family: 'Times New Roman', Times, serif;"><?= $post['description']?></h5>
    </div>

    </div>
</div>