<?php
    require_once('../inc/database.php');
    if($_SERVER['REQUEST_METHOD'] =='POST'){
        $isCreated = createPost($_POST);
        if($isCreated){
            header('Location: http://localhost/sothoun_phauv-project-php/?page=home');
        }
    }
   