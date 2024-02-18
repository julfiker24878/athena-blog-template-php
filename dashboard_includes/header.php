<?php session_start();
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./dashboard_assets/images/favicon.png">
	<link rel="stylesheet" href="./dashboard_assets/vendor/chartist/css/chartist.min.css">
    <link href="/athena/dashboard_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/athena/dashboard_assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="/athena/dashboard_assets/css/all.min.css" rel="stylesheet">
    <link href="/athena/dashboard_assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="/athena/dashboard_assets/images/logo.png" alt="">
                <img class="logo-compact" src="/athena/dashboard_assets/images/logo-text.png" alt="">
                <img class="brand-title" src="/athena/dashboard_assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="/athena/users/uploads/profile/<?= $_SESSION['profile_image']; ?>" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong><?= (isset($_SESSION['username']))? $_SESSION['name'] : 'User' ?></strong></span>
										<p class="fs-12 mb-0"><?php 
                                            if($_SESSION['role'] == 1){
                                                echo "Admin";
                                            }elseif($_SESSION['role'] == 2){
                                                echo "Moderator";
                                            }elseif($_SESSION['role'] == 3){
                                                echo "Editor";
                                            }else{
                                                echo "Subscriber";
                                            }
                                        ?></p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/athena/profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="/athena/users/logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/admin.php">Home</a></li>
							<li><a href="/athena/index.php" target="_blank">Visit Site</a></li>
						</ul>
                    </li>

                    <?php if($role == 1 || $role == 2 || $role == 3){ ?>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/athena/users/view_users.php">View Users</a></li>
                            <?php if($role == 1){ ?>
                            <li><a href="/athena/users/register.php">Add Users</a></li>
                            <?php } ?>
                            <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./dashboard_assets/email-compose.html">Compose</a></li>
                                    <li><a href="./dashboard_assets/email-inbox.html">Inbox</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </li>
                    <?php } ?>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-palette"></i>
							<span class="nav-text">Logo</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_logo/add_logo.php">Add Logo</a></li>
							<li><a href="/athena/option_logo/view_logo.php">View Logo</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-table-cells-large"></i>
							<span class="nav-text">Categories</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_category/add_category.php">Add Category</a></li>
							<li><a href="/athena/option_category/view_category.php">View Category</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-tags"></i>
							<span class="nav-text">Tags</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_tags/add_tags.php">Add Tags</a></li>
							<li><a href="/athena/option_tags/view_tags.php">View Tags</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-pen-to-square"></i>
							<span class="nav-text">Posts</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_blog/add_blog.php">Add Post</a></li>
							<li><a href="/athena/option_blog/view_blog.php">View Posts</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-thumbs-up"></i>
							<span class="nav-text">Social Accounts</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_social_accounts/add_social_account.php">Add Social Account</a></li>
							<li><a href="/athena/option_social_accounts/view_social_account.php">View Social Accounts</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-envelopes-bulk"></i>
							<span class="nav-text">Mail Box</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="/athena/option_">View Contact Form Messages</a></li>
							<li><a href="/athena/option_">View Comments</a></li>
							<li><a href="/athena/option_subscribe/view_subscribe.php">View Subscribers</a></li>
						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-copyright"></i>
							<span class="nav-text">Footer</span>
						</a>
                        <ul aria-expanded="false">
                            
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Important Links</a>
                                <ul aria-expanded="false">
                                    <li><a href="/athena/option_important_links/add_important_links.php">Add Important Links</a></li>
                                    <li><a href="/athena/option_important_links/view_important_links.php">View Important Links</a></li>
                                </ul>
                            </li>

                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Footer Credit</a>
                                <ul aria-expanded="false">
                                    <li><a href="/athena/option_footer_credit/add_footer_credit.php">Add Footer Credit</a></li>
                                    <li><a href="/athena/option_footer_credit/view_footer_credit.php">View Footer Credit</a></li>
                                </ul>
                            </li>
							
						</ul>
                    </li>
                    
                </ul>
				<div class="add-menu-sidebar">
					<img src="images/calendar.png" alt="" class="mr-3">
					<p class="	font-w500 mb-0">Create Workout Plan Now</p>
				</div>
				<div class="copyright">
					<p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">