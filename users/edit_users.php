<?php 

require './../dashboard_includes/header.php';
require './../db.php';

$id = $_GET['id'];
$select_users = "SELECT * FROM users WHERE id=$id";
$users_query = mysqli_query($db_connect, $select_users);
$users_assoc = mysqli_fetch_assoc($users_query);

?>
<div class="row">
    <div class="col-xl-10 m-auto">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="text-white">Edit '<strong><?= $users_assoc['name']; ?>'</strong>s info</h3>
            </div>
            <div class="card-body">
                <form action="./update_users.php" method="POST">
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input name="id" type="hidden" value="<?= $users_assoc['id']; ?>">
                            <input name="username" id="username" type="text" class="form-control" value="<?= $users_assoc['username']; ?>">
                            <?php if(isset($_SESSION['username_exist'])){ ?>
                                <div class="alert alert-warning">
                                    <?= $_SESSION['username_exist']; ?>
                                </div>
                            <?php } unset($_SESSION['username_exist']); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" id="email" type="text" class="form-control" value="<?= $users_assoc['email']; ?>">
                            <?php if(isset($_SESSION['email_exist'])){ ?>
                                <div class="alert alert-warning">
                                    <?= $_SESSION['email_exist']; ?>
                                </div>
                            <?php } unset($_SESSION['email_exist']); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input name="password" id="password" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require './../dashboard_includes/footer.php'; ?>

<!-- SUCCESS -->
<?php if(isset($_SESSION['success'])){ ?>

<script>
    Swal.fire(
        'Congratulations!',
        '<?= $_SESSION['success']; ?>',
        'success'
        )
</script>

<?php } unset($_SESSION['success']); ?>