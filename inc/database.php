<?php
    function db(){
        return new mysqli('localhost','root','','news');
    }
    function post(){
        return db()->query("SELECT * FROM post ORDER BY date ASC");
    }
    function deletePost($id){
        return db()-> query("DELETE FROM post WHERE post_id = $id");
    }
    function getOnePost($id){
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }

    function createPost($value){
       $title = $value['title'];
       $short = $value['short'];

        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $direct = "../assets/images/";
        
        // check size
        // if($filetype != "image/jpg"){
        //     echo "image allowed only .";
        // }elseif($fileSize>20000){
        //     echo "your file is large";
        // }else{
        //     move_uploaded_file($tmp_name,$direct.$fileName);
        // }
        move_uploaded_file($tmp_name,$direct.$fileName);
       $description = $value['des'];
       $categoryid = $value['categoryid'];
       return db()->query("INSERT INTO post(title,short,image,description,categoryid) VALUES('$title','$short','$fileName','$description','$categoryid')");
    }

    

    function updatePost($value){
        $title = $value['title'];
        $short = $value['short'];
        $image = $value['image'];
        $description = $value['des'];
        $categoryid = $value['categoryid'];
        $id = $value['post_id'];
        
        return db()->query("UPDATE post SET title='$title', short ='$short',image = '$image',
        description='$description', categoryid = '$categoryid' WHERE post_id = $id ");
    }
    
  

    //post 2
    function post2(){
        return db()->query("SELECT * FROM post ORDER BY date DESC LIMIT 2");
    }

    //sports

    function sport(){
        return db()-> query("SELECT * FROM post WHERE categoryid = 2 ORDER BY date ASC");
    }

    // business
    function business(){
        return db()-> query("SELECT * FROM post WHERE categoryid = 1");
    }

    // khmer
    function khmer(){
        return db()->query("SELECT * FROM post WHERE categoryid = 4");
    }
    // agriculture

    function agriculture(){
        return db()->query("SELECT * FROM post WHERE categoryid = 3 ORDER BY date DESC");
    }
    
    function getThree(){
        return db()->query("SELECT * FROM post WHERE categoryid = 3 ORDER BY date LIMIT 3");
    }