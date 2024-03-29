<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./../dashboard_assets/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
                                        <a href="./../index.php" style="color: #fff; font-size: 50px; font-weight: 900;">Athena</a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>

                                    <form action="./login_post.php" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">

                                            <?php if(isset($_SESSION['email_inexist'])){ ?>
                                                <div class="alert alert-danger">
                                                    <?= $_SESSION['email_inexist']; ?>
                                                </div>
                                            <?php } unset($_SESSION['email_inexist']); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter your password" name="password">

                                            <?php if(isset($_SESSION['wrong_pass'])){ ?>
                                                <div class="alert alert-danger">
                                                    <?= $_SESSION['wrong_pass']; ?>
                                                </div>
                                            <?php } unset($_SESSION['wrong_pass']); ?>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <a class="text-white" href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>

                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="./register.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./../dashboard_assets/vendor/global/global.min.js"></script>
	<script src="./../dashboard_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./../dashboard_assets/js/custom.min.js"></script>
    <script src="./../dashboard_assets/js/deznav-init.js"></script>

</body>
</html>