
<?php require_once('partial/header.php'); ?>
    <div class="container p-5 ">
        <?php 
            require_once('inc/database.php');
            // session_start();
            $message_error = "";
    
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                $isAdd = addUser($_POST);
                if($isAdd) {
                    header("Location: http://localhost/sothoun_phauv-project-php/?page=home");
                } else {
                    $message_error = "Your email already exist or Profile image must be JPG JPEG PNG";
                }
            }
        ?>
        <form action="" method="post" class="p-5" style="background:#e1e3e1;" enctype="multipart/form-data">
            <div class="form-group text-center">
                <h1>Please sign in your Account</h1>
            </div>
            <div class="text-center">
                <small class="text-danger"><?= $message_error ?></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  name="username" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="file" class="form-control"  name="profile_img" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign In!</button>
            </div>
            <div class="text-center">
                <span>Have an account? <a href="login.php">Login now</a></span>
            </div>
        </form>
    </div>
