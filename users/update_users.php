<?php 

session_start();
require './../db.php';

$id = $_POST['id'];

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_pass = password_hash($password, PASSWORD_DEFAULT);

$select_email = "SELECT count(*) as email_exist from users WHERE email='$email' ";
$select_email_result = mysqli_query($db_connect, $select_email);
$after_assoc = mysqli_fetch_assoc($select_email_result);

$select_username = "SELECT count(*) as username_exist from users WHERE username='$username' ";
$select_username_result = mysqli_query($db_connect, $select_username);
$after_assoc_username  = mysqli_fetch_assoc($select_username_result);

if($after_assoc['email_exist'] == 1){
    $_SESSION['email_exist'] = "Email already exist!";
    header('location: ./edit_users.php');
}elseif($after_assoc_username['username_exist'] == 1){
    $_SESSION['username_exist'] = "Username already taken!";
    header('location: ./edit_users.php');
}else{
    $update_users = "UPDATE users SET username='$username', email='$email', password='$hash_pass' WHERE id=$id";
    $update_query = mysqli_query($db_connect, $update_users);

    $_SESSION['success'] = "Settings saved";
    header('location: ./edit_users.php?id='.$id);
}