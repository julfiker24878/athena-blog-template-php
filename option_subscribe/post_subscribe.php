<?php 

session_start();
require '../db.php';
require '../session.php';

$email = $_POST['email'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['invalid'] = "Please enter your email address!";
    header('location: /athena/index.php');
}else{
    date_default_timezone_set('Asia/Dhaka');
    $subscribed_at = date('Y-m-d');
    $insert = "INSERT INTO subscribe(email, subscribed_at) VALUES('$email','$subscribed_at')";
    $insert_result = mysqli_query($db_connect, $insert);

    $_SESSION['success'] = "Thanks for subscribing our newsletter!";
    header('location: /athena/index.php');
}