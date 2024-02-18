<?php

if(!isset($_SESSION['login_done'])){
    header('location: /athena/users/login.php');
}