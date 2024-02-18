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
                <form action="./update_desc.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="mb-1">About Me</label>
                        <input type="hidden" name="id" value="<?= $users_assoc['id']; ?>" >
                        <input id="name" type="text" class="form-control mb-2" name="about" value="<?= $users_assoc['about']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="profile_image" class="mb-1">Cover Photo</label>
                        <img src="<?= ($users_assoc['cover_photo'] == '')? '/athena/users/uploads/cover.png' : '/athena/users/uploads/cover/'.$users_assoc['cover_photo'] ?>" alt="profile-image" class="d-block" width="800">
                        <input id="profile_image" type="file" class="form-control mb-2" name="cover_photo">
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