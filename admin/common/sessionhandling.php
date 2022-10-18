<?php

if (!isset($_SESSION)){
    session_start();    
}

if (count($_SESSION['userData'])==0){
    header("location:./login.php");
    exit();
}

$userData = $_SESSION['userData'];

?>

