<?php 

session_start();
require 'queries.php';
date_default_timezone_set('Asia/Dhaka');
$date = date('Y');

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Athena - Minimal Blog HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/athena-favicon.svg">
    <!-- Theme CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/widgets.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress bg-dark"></div>
    <!-- Start Preloader -->
    <div class="preloader text-center">
        <div class="gooey">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="athena-cancel"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-widget widget-creative-menu">
                <ul>
                    <?php foreach($category_query2 as $category){ ?>
                    <li><a href="<?= $category['link']; ?>"><?= $category['name']; ?><sup>235</sup></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="sidebar-widget widget-menu pt-30">
                <div class="widget-header-3 font-primary mb-20">
                    <h5 class="widget-title text-uppercase text-white">Follow</h5>
                </div>
                <ul>
                    <?php foreach($social_account_query as $social_accounts){ ?>
                    <li><a href="<?= $social_accounts['link']; ?>"><?= $social_accounts['account_name']; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="offcanvas-copyright">
                <p class="text-muted text-uppercase mb-0">Athena Magazine</p>
                <p class="text-muted mb-0 font-medium">123 Main Street</p>
                <p class="text-muted mb-0 font-medium">New York, NY 10001</p>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-sticky header-style-1 bg-white">
        <!--Main navigation-->
        <div class="container">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="mobile_logo d-md-none">
                <h1 class="font-secondary"><a href="index.html">Athena</a></h1>
            </div>
            <div class="mobile-search d-md-none">
                <button class="search-icon d-inline">
                    <i class="athena-search mr-5"></i>
                </button>
            </div>
            <div class="row align-items-center d-none d-md-flex">
                <div class="col-lg-5 col-md-4">
                    <div class="off-canvas-toggle-cover d-none d-lg-inline-block mr-20">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                    <ul class="main-menu d-none d-lg-inline font-primary">
                        <?php foreach($category_query as $categories){ ?>
                        <li> <a href="<?= $categories['link']; ?>"><?= $categories['name']; ?> </a> </li>
                        <?php } ?>
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-none">
                        <li class="menu-item-has-children">
                            <a href="#">Recipes</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Specialty Diets</a></li>
                                <li><a href="category-2.html">Meal Prep Recipes</a></li>
                                <li><a href="category-3.html">Whole30</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Lifestyle</a>
                            <ul class="sub-menu">
                                <li><a href="category-4.html">Style</a></li>
                                <li><a href="category.html">Travel</a></li>
                                <li><a href="category-2.html">Shop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="category-3.html">Clothing</a></li>
                                <li><a href="category-4.html">Beauty</a></li>
                                <li><a href="category.html">Kitchen</a></li>
                                <li><a href="category-2.html">Home</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <!--Logo and tagline <?= ($assoc_logo['logo_text'] == '')? 'Athena' : $assoc_logo['logo_text'] ?> -->
                    <div class="header-logo text-center">
                        <h1 class="font-secondary"><a href="index.php"><?php
                            if($assoc_logo['logo_text'] == ''){
                                echo "Athena";
                            }elseif($assoc_logo['logo_image'] == ''){
                                echo $assoc_logo['logo_text'];
                            }elseif( $assoc_logo['logo_text'] != '' && $assoc_logo['logo_image'] != '' ){ ?>
                            <img src="option_logo/uploaded/<?= $assoc_logo['logo_image'] ?>" alt="logo">
                            <?php } ?>
                        </a></h1>
                        <p class="tagline font-primary"><?= ($assoc_logo['tagline'] == '')? 'Creative Magazine' : $assoc_logo['tagline'] ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 text-right ">
                    <ul class="header-social-network d-none d-md-inline-block list-inline">
                        <?php foreach($social_account_query as $social){ ?>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="<?= $social['icon']; ?>"></i></a></li>
                        <?php } ?>
                    </ul>
                    <button class="search-icon d-inline">
                        <i class="athena-search mr-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class="pt-150 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <button class="search-icon search-icon-close -md-inline">
                            <i class="athena-cancel mr-5"></i>
                        </button>
                        <p><span class="search-text-bg font-secondary">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Enter your keywords and hit Enter">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="athena-search mr-5"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="search-suggested mt-80">
                            <h5 class="suggested font-heading mb-20"> <strong>Suggested:</strong></h5>
                            <ul class="list-inline d-inline-block">
                                <li class="list-inline-item"><a href="category.html">Events</a></li>
                                <li class="list-inline-item"><a href="category-2.html">Shop</a></li>
                                <li class="list-inline-item"><a href="category-3.html">Tech</a></li>
                                <li class="list-inline-item"><a href="category-4.html">Fashion</a></li>
                                <li class="list-inline-item"><a href="category.html">Books</a></li>
                                <li class="list-inline-item"><a href="category-2.html">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>