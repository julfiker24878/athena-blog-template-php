<?php 

session_start();
require './../db.php';
date_default_timezone_set('Asia/Dhaka');

$errors = [];
$field_names = ['username'=>'Please enter your username', 'email'=>'Please enter your email address', 'password'=>'Please enter a password', 'cpassword'=>'Please confirm your password'];

foreach($field_names as $field_name=>$msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $msg;
    }
}

if(count($errors) == 0){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $special = preg_match('@[^ \w]@', $password);
    $created_at = date('Y-m-d h:i:s');

    $select_email = "SELECT count(*) as email_exist from users WHERE email='$email' ";
    $select_email_result = mysqli_query($db_connect, $select_email);
    $after_assoc = mysqli_fetch_assoc($select_email_result);

    $select_username = "SELECT count(*) as username_exist from users WHERE username='$username' ";
    $select_username_result = mysqli_query($db_connect, $select_username);
    $after_assoc_username  = mysqli_fetch_assoc($select_username_result);

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['invalid_email'] = "Please enter a valid email address!";
        header('location: ./register.php');
    }elseif($after_assoc['email_exist'] == 1){
        $_SESSION['email_exist'] = "Email already exist!";
        header('location: ./register.php');
    }elseif($after_assoc_username['username_exist'] == 1){
        $_SESSION['username_exist'] = "Username already taken!";
        header('location: ./register.php');
    }elseif(!$upper || !$lower || !$number || !$special || strlen($password) < 8){
        $_SESSION['weak_pass'] = "Your password must contain at least one number, uppercase letter, lowercase letter, and special character!";
        header('location: ./register.php');
    }elseif($password != $cpassword){
        $_SESSION['diff_pass'] = "Password doesn't matched!";
        header('location: ./register.php');
    }else{
        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $profile_image = $_FILES['profile_image'];
        $image_file = $profile_image['name'];
        $after_explode = explode('.', $image_file);
        $extension = end($after_explode);
        $allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'PNG', 'JPG', 'JPEG');
        if(in_array($extension, $allowed_extension)){
            if($profile_image['size'] < 800000){

                $insert_users = "INSERT INTO users(name, username, email, role, password, created_at) VALUES('$name', '$username', '$email', '$role', '$hash_password', '$created_at')";
                $insert_query = mysqli_query($db_connect, $insert_users);

                $id = mysqli_insert_id($db_connect);
                $image_name = $id.'.'.$extension;
                $new_location = './uploads/profile/'.$image_name;
                move_uploaded_file($profile_image['tmp_name'], $new_location);

                $update_image = "UPDATE users SET profile_image='$image_name' WHERE id=$id ";
                $update_image_result = mysqli_query($db_connect, $update_image);

                $_SESSION['success'] = "Congratulations! Your registration has been successfully completed!";
                header('location: ./register.php');

            }else{
                $_SESSION['invalid_size'] = "File size too large!";
                header('location: ./register.php');
            }

        }else{
            $_SESSION['invalid_extension'] = "Invalid Extension!";
            header('location: ./register.php');
        }
    }
    
}else{
    $_SESSION['err'] = $errors;
    header('location: ./register.php');
}