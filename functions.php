<?php

if (!isset($_SESSION)){
    session_start();    
}

include './include/dbconnection.php';

class UserManage {

    function checkUser() {
        
        $username = $_POST['username'];

        $con = $GLOBALS['con'];
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $con->query($sql);

        if($result->num_rows > 0) {
            return 1;
        }else{
            return 2;
        }

    }

    function registerUser(){
        // print_r($_POST);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];


        $date_created = date("Y-m-d");

        $con = $GLOBALS['con'];
        $sql = "INSERT INTO user(first_name,last_name,email_address,username,password,user_role,date_registered) VALUES('$firstname','$lastname','$email','$username','$password','2','$date_created')";
        $result = $con -> query($sql) or die($con->error);

        return 1;

    }

    function userLogin(){
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $con = $GLOBALS['con'];
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND user_role='2'";
        $result = $con->query($sql);
        
        if($result->num_rows > 0) {
            $webUserData = $result->fetch_array();
            $_SESSION['webUserData'] = $webUserData;
            return 1;
        }else{
            return 2;
        }
    }

    function getPages(){

        $con=$GLOBALS['con'];
        $sql="SELECT * FROM page ORDER BY id ASC";
        $result=$con->query($sql);
        return $result;
        
    }

    
}


?>