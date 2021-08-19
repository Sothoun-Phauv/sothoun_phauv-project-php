<?php
    require_once('../inc/database.php');
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isUpdated = updatePost($_POST);
        
    }
    if($isUpdated){
        header('Location: http://localhost/sothoun_phauv-project-php/?page=home');
    }