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
                <h3>Edit Profile</h3>
            </div>
            <div class="card-body">
                <form action="./update_settings.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="mb-1">Name</label>
                        <input type="hidden" name="id" value="<?= $users_assoc['id']; ?>" >
                        <input id="name" type="text" class="form-control mb-2" name="name" value="<?= $users_assoc['name']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="username" class="mb-1">Username</label>
                        <input id="username" type="text" class="form-control mb-2" name="username" value="<?= $users_assoc['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="profile_image" class="mb-1">Profile Image</label>
                        <img src="./uploads/profile/<?= $users_assoc['profile_image']; ?>" alt="profile-image" class="d-block" width="100">
                        <input id="profile_image" type="file" class="form-control mb-2" name="profile_image">
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