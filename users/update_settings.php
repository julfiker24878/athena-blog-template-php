<?php 

session_start();
require './../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];

$profile_image = $_FILES['profile_image'];
$image_file = $profile_image['name'];
$after_explode = explode('.', $image_file);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'PNG', 'JPG', 'JPEG');

if($image_file != ''){

    if(in_array($extension, $allowed_extension)){

        if($profile_image['size'] < 800000){

            $select_image = "SELECT * FROM users WHERE id=$id";
            $select_image_result = mysqli_query($db_connect, $select_image);
            $after_assoc = mysqli_fetch_assoc($select_image_result);

            $delete_from = './uploads/profile/'.$after_assoc['profile_image'];
            unlink($delete_from);

            $update = "UPDATE users SET name='$name', username='$username' WHERE id=$id";
            $update_query = mysqli_query($db_connect, $update);

            $image_name = $id.'.'.$extension;
            $new_location = './uploads/profile/'.$image_name;
            move_uploaded_file($profile_image['tmp_name'], $new_location);

            $update_image = "UPDATE users SET profile_image='$image_name' WHERE id=$id ";
            $update_image_result = mysqli_query($db_connect, $update_image);

            $_SESSION['success'] = "Settings saved!";
            header('location: ./edit_settings.php?id='.$id);

        }else{
            $_SESSION['invalid_size'] = "File size too large!";
            header('location: ./edit_settings.php?id='.$id);
        }

    }else{
        $_SESSION['invalid_extension'] = "Invalid Extension!";
        header('location: ./edit_settings.php?id='.$id);
    }

}else{
    $update = "UPDATE users SET name='$name', username='$username' WHERE id=$id";
    $update_query = mysqli_query($db_connect, $update);

    $_SESSION['success'] = "Settings saved!";
    header('location: ./edit_settings.php?id='.$id);
}