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

        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $direct = "../assets/images/";
        move_uploaded_file($tmp_name,$direct.$fileName);

        $description = $value['des'];
        $categoryid = $value['categoryid'];
        $id = $value['post_id'];
        
        return db()->query("UPDATE post SET title='$title', short ='$short',image = '$fileName',
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
        return db()-> query("SELECT * FROM post WHERE categoryid = 1 ORDER BY date DESC");
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
        return db()->query("SELECT * FROM post WHERE categoryid = 3 ORDER BY date DESC LIMIT 3");
    }


    //short by name
    function newArrived(){
        return db()->query("SELECT * FROM post ORDER BY date DESC");
    }
    function shortName(){
        return db()->query("SELECT * FROM post ORDER BY title DESC");
    }


    // detail funtion
    function getOneHome($id) {
        return db()->query("SELECT * FROM post WHERE post_id = $id");
    }
    function getOneKhmer($id) {
        return db()->query("SELECT * FROM post WHERE categoryid = 4 and post_id = $id");
    }

    function getOneSport($id) {
        return db()->query("SELECT * FROM post WHERE categoryid = 2 and post_id = $id");
    }
    function getOneBusiness($id){
        return db()->query("SELECT * FROM post WHERE categoryid = 1 and post_id = $id");
    }
    function getOneAgriculture($id){
        return db()->query("SELECT * FROM post WHERE categoryid = 3 and post_id = $id");
    }


    // search function

    function found($value){
        
        $result = $value['search'];
        return db()->query("SELECT * FROM post WHERE title like '%$result%' ORDER BY date ASC");
    }



    // function user sign up

    function addUser($value){
        $username = $value['username'];
        $password = $value['password'];
        $passEnc = password_hash($password, PASSWORD_DEFAULT);
        $email = $value['email'];

        $pro_name = $_FILES['profile_img']['name'];
        $pro_size = $_FILES['profile_img']['size'];
        $pro_type = $_FILES['profile_img']['type'];
        $pro_tmp_name = $_FILES['profile_img']['tmp_name'];

        $extension = pathinfo($pro_name, PATHINFO_EXTENSION);
        $extensionLocal = strtolower($extension);
        $allowExtension = array('jpg', 'jpeg', 'png','jfif');

        $users = getAllUser();
        $isMatchEmail = true;

        foreach($users as $user) {
            if($email == $user['email']) {
                $isMatchEmail = false;
            }
        }

        if($isMatchEmail and in_array($extensionLocal, $allowExtension)) {
            $newImageName = uniqid("post-", true) . "." . $extensionLocal;
            $pro_dir = "assets/images/";
            move_uploaded_file($pro_tmp_name, $pro_dir.$pro_name);
            return db()->query("INSERT INTO users(username,email,role,user_img, password) VALUES ('$username','$email','User','$newImageName', '$passEnc')");

        }
        

        
    }

    // function get all user

    function getAllUser() {
        return db()->query("SELECT * FROM users");
    }
 
    // function user login
    function login($value) {
        $db = new mysqli('localhost','root','','news');
        $username = $value['username'];
        $password = $value['password'];
        $allUser = $db->query("SELECT password, username FROM users WHERE username = '$username'");
        $isValid = false;
        foreach($allUser as $user) {
            if(password_verify($password, $user['password']) and $username === $user['username']) {
                $isValid = true;
            }
        }
        return $isValid;
    }
