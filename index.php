<?php
include_once('partial/header.php');
include_once('partial/navbar.php');


if(isset($_GET['page'])){
    if($_GET['page'] == "home"){
        include_once('pages/home.php');
    }elseif($_GET['page'] == "business"){
        include_once('pages/business.php');
    }elseif($_GET['page'] == 'khmer'){
        include_once('pages/khmer.php');
    }elseif($_GET['page'] == 'sport'){
        include_once('pages/sport.php');
    }elseif($_GET['page']=='agriculture'){
        include_once('pages/agriculture.php');
    }elseif($_GET['page']=='about'){
        include_once('pages/about.php');
    }elseif($_GET['page']=='contact'){
        include_once('pages/contact.php');
    }else{
        include_once('pages/404.php');
    }
}else{
    include_once('pages/home.php');
}

include_once('partial/footer.php');