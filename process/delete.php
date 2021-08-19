<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];
    $isDeleted = deletePost($id);
    if ($isDeleted){
        header('location: http://localhost/sothoun_phauv-project-php/?page=home');
    }