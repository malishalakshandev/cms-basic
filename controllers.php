<?php

$action = $_GET['action'];
include 'functions.php';

$functions = new UserManage();

if($action == 'check_user_exist'){
    $return = $functions->checkUser();
    echo $return;
}

if($action == 'register_user'){
    $return = $functions->registerUser();
    echo $return;
}

if($action == 'user_login'){
    $return = $functions->userLogin();
    echo $return;
}










?>