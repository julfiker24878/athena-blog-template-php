<?php 
session_start();
require '../db.php';
require '../session.php';

$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert_tags = "INSERT INTO tags(name, link) VALUES('$name','$link')";
$insert_tags_result = mysqli_query($db_connect, $insert_tags);

$_SESSION['success'] = "Tag has been added successfully!";
header('location: add_tags.php');