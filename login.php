    <?php require_once('partial/header.php'); ?>
    <?php 
        require_once('inc/database.php');
        // session_start();
        $message_error = "";

        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $isValid = login($_POST);
            if($isValid) {
                header("Location: http://localhost/sothoun_phauv-project-php/?page=home");
            } else {
                $message_error = "Incorrect password or username";
            }
        }
    ?>
    <div class="container p-5">
        <form action="" method="post" class="p-5" style="background:#e1e3e1;">
            <div class="text-center">
                <img src="assets/images/image.png" class="rounded" alt="Please Check the internet" style="width:140px; height:140px">
            </div>
            <div class="form-group text-center font-weight-bold">
                <h1 style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Account Login!</h1>
            </div>
            <div class="text-center">
                <small class="text-danger"><?= $message_error ?></small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  name="username" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control"  name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login !</button>
            </div>
            <div class="text-center">
                <span>Don't have account yet? <a href="sign.php">Register now</a></span>
            </div>
            
        </form>
    </div>

