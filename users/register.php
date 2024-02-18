<?php

require './../dashboard_includes/header.php';
require './../db.php';

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./../dashboard_assets/images/favicon.png">
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
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>

                                    <?php if(isset($_SESSION['success'])){ ?>
                                        <div class="alert alert-success">
                                            <?= $_SESSION['success']; ?>
                                        </div>
                                    <?php } unset($_SESSION['success']); ?>

                                    <form action="insert_user.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Name</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="Your name" value="<?= (isset($_SESSION['name']))? $_SESSION['name']: '' ?>">

                                            <?php if(isset($_SESSION['err']['name'])){ ?>
                                                <div class="alert alert-warning mt-2">
                                                    <?php echo $_SESSION['err']['name']; ?>
                                                </div>
                                            <?php } unset($_SESSION['err']['name']); ?>

                                            <?php if(isset($_SESSION['name_exist'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['name_exist']; ?>
                                                </div>
                                            <?php } unset($_SESSION['name_exist']); ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" placeholder="username" value="<?= (isset($_SESSION['username']))? $_SESSION['username']: '' ?>">

                                            <?php if(isset($_SESSION['err']['username'])){ ?>
                                                <div class="alert alert-warning mt-2">
                                                    <?php echo $_SESSION['err']['username']; ?>
                                                </div>
                                            <?php } unset($_SESSION['err']['username']); ?>

                                            <?php if(isset($_SESSION['username_exist'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['username_exist']; ?>
                                                </div>
                                            <?php } unset($_SESSION['username_exist']); ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" value="<?= (isset($_SESSION['email']))? $_SESSION['email']: '' ?>">

                                            <?php if(isset($_SESSION['err']['email'])){ ?>
                                                <div class="alert alert-warning mt-2">
                                                    <?php echo $_SESSION['err']['email']; ?>
                                                </div>
                                            <?php } unset($_SESSION['err']['email']); ?>

                                            <?php if(isset($_SESSION['invalid_email'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['invalid_email']; ?>
                                                </div>
                                            <?php } unset($_SESSION['invalid_email']); ?>

                                            <?php if(isset($_SESSION['email_exist'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['email_exist']; ?>
                                                </div>
                                            <?php } unset($_SESSION['email_exist']); ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="profile_image" class="mb-1 text-white"><strong>Profile Image</strong></label>
                                            <input id="profile_image" type="file" class="mb-2" name="profile_image">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>User Role</strong></label>
                                            <select class="form-select form-control" aria-label="Default select example" name="role">
                                                <option selected>Set a role</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Moderator</option>
                                                <option value="3">Editor</option>
                                                <option value="4">Subscriber</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter a password">

                                            <?php if(isset($_SESSION['err']['password'])){ ?>
                                                <div class="alert alert-warning mt-2">
                                                    <?php echo $_SESSION['err']['password']; ?>
                                                </div>
                                            <?php } unset($_SESSION['err']['password']); ?>

                                            <?php if(isset($_SESSION['weak_pass'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['weak_pass']; ?>
                                                </div>
                                            <?php } unset($_SESSION['weak_pass']); ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Confirm Password</strong></label>
                                            <input type="password" name="cpassword" class="form-control" placeholder="Please repeat your password">

                                            <?php if(isset($_SESSION['err']['cpassword'])){ ?>
                                                <div class="alert alert-warning mt-2">
                                                    <?php echo $_SESSION['err']['cpassword']; ?>
                                                </div>
                                            <?php } unset($_SESSION['err']['cpassword']); ?>

                                            <?php if(isset($_SESSION['diff_pass'])){ ?>
                                                <div class="alert alert-warning">
                                                    <?= $_SESSION['diff_pass']; ?>
                                                </div>
                                            <?php } unset($_SESSION['diff_pass']); ?>

                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>

                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white" href="./login.php">Sign in</a></p>
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

<?php require './../dashboard_includes/footer.php'; ?>
<?php 

unset($_SESSION['username']);
unset($_SESSION['email']);

?>