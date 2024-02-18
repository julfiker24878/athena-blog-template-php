<?php 
session_start();
require '../db.php';
require '../session.php';

$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert_category = "INSERT INTO category(name, link) VALUES('$name','$link')";
$insert_category_result = mysqli_query($db_connect, $insert_category);

$_SESSION['success'] = "Category has been added successfully!";
header('location: add_category.php');