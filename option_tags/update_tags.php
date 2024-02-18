<?php

session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$update = "UPDATE tags SET name='$name', link='$link' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Saved Changes!";
header('location: edit_tags.php?id='.$id);