
<?php 
    require_once('partial/header.php'); 
    
    if (isset($_GET['page'])) {
        require_once('partial/navbar.php'); 
        $isPageExist = file_exists('pages/' . $_GET['page'] . '.php');
        $page = 'pages/' . $_GET['page'] . '.php';
        if($isPageExist) {
            require_once($page);
        }else {
            require_once('pages/404.php');
        }
    }else {
        
        require_once('login.php');
        die();
    }
    require_once('partial/footer.php'); 
?>