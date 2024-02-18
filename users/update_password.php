<?php 

session_start();
require './../db.php';

$id = $_POST['id'];

$password = $_POST['password'];
$npassword = $_POST['npassword'];
$cpassword = $_POST['cpassword'];

$select_email = "SELECT * FROM users WHERE id=$id ";
$select_email_result = mysqli_query($db_connect, $select_email);
$after_assoc = mysqli_fetch_assoc($select_email_result);

if( password_verify($password, $after_assoc['password']) ){
    if( $npassword == $cpassword ){

        $hash_pass = password_hash($npassword, PASSWORD_DEFAULT);

        $update_password = "UPDATE users SET password='$hash_pass' WHERE id=$id ";
        $update_password_query = mysqli_query($db_connect, $update_password);

        $_SESSION['success'] = "Your password has been successfully changed!";
        header('location: ./edit_password.php');

    }else{
        $_SESSION['unmatched_pass'] = "Your new password does not matched with confirm password!";
        header('location: ./edit_password.php');
    }
}else{
    $_SESSION['wrong_pass'] = "Your old password does not matched!";
    header('location: ./edit_password.php');
}