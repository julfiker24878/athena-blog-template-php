<?php 

session_start();
require './../db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select_email = "SELECT count(*) as email_exist from users WHERE email='$email' ";
$email_query = mysqli_query($db_connect, $select_email);
$email_assoc = mysqli_fetch_assoc($email_query);

$select_pass = "SELECT * FROM users WHERE email='$email' ";
$pass_query = mysqli_query($db_connect, $select_pass);
$pass_assoc = mysqli_fetch_assoc($pass_query);

if( $email_assoc['email_exist'] == 1 ){
    if( password_verify($password, $pass_assoc['password']) ){
        $_SESSION['login_done'] = "ok!";
        $_SESSION['login_notice'] = "You are successfully logged in!";
        $_SESSION['name'] = $pass_assoc['name'];
        $_SESSION['username'] = $pass_assoc['username'];
        $_SESSION['email'] = $pass_assoc['email'];
        $_SESSION['profile_image'] = $pass_assoc['profile_image'];
        $_SESSION['role'] = $pass_assoc['role'];
        header('location: ./../admin.php');
    }else{
        $_SESSION['wrong_pass'] = "Wrong Password!";
        header('location: ./login.php');
    }
}else{
    $_SESSION['email_inexist'] = "Email not exist!";
    header('location: ./login.php');
}