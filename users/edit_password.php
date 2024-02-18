<?php 

require './../dashboard_includes/header.php';
require './../db.php';

$select_users = "SELECT * FROM users";
$users_query = mysqli_query($db_connect, $select_users);
$users_assoc = mysqli_fetch_assoc($users_query);

?>

<div class="row">
    <div class="col-md-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h3>Change Password</h3>
            </div>
            <div class="card-body">
                <form action="./update_password.php" method="POST">
                    <div class="form-group">
                        <label for="password" class="mb-1">Current Password</label>
                        <input type="hidden" name="id" value="<?= $users_assoc['id']; ?>" >
                        <input id="password" type="password" class="form-control mb-2" name="password" >
                    </div>
                    <div class="form-group">
                        <label for="npassword" class="mb-1">New Password</label>
                        <input id="npassword" type="password" class="form-control mb-2" name="npassword">
                    </div>
                    <div class="form-group">
                        <label for="cpassword" class="mb-1">Confirm Password</label>
                        <input id="cpassword" type="password" class="form-control mb-2" name="cpassword">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require './../dashboard_includes/footer.php'; ?>

<!-- INVALID EXTENSION -->
<?php if(isset($_SESSION['invalid_extension'])){ ?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $_SESSION['invalid_extension']; ?>'
        })
</script>

<?php } unset($_SESSION['invalid_extension']); ?>

<!-- INVALID SIZE -->
<?php if(isset($_SESSION['invalid_size'])){ ?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $_SESSION['invalid_size']; ?>'
        })
</script>

<?php } unset($_SESSION['invalid_size']); ?>

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

<!-- WRONG PASSWORD -->
<?php if(isset($_SESSION['wrong_pass'])){ ?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $_SESSION['wrong_pass']; ?>'
        })
</script>

<?php } unset($_SESSION['wrong_pass']); ?>

<!-- UNMATCHED PASSWORD -->
<?php if(isset($_SESSION['unmatched_pass'])){ ?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $_SESSION['unmatched_pass']; ?>'
        })
</script>

<?php } unset($_SESSION['unmatched_pass']); ?>