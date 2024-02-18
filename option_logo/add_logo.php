<?php
require './../dashboard_includes/header.php'; 
?>

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <!-- TITLE -->
            <div class="card-header">
                <h2 style="color: #111; font-family: 'Montserrat', sans-serif;">Add Site Logo</h2>
            </div>
            <!-- FORM -->
            <div class="card-body">
                <form action="post_logo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><!-- LOGO TEXT -->
                        <label for="logo_text" class="form-label">Logo Text</label>
                        <input name="logo_text" type="text" class="form-control" id="logo_text">
                    </div>
                    <div class="mb-3"><!-- SITE TAGLINE -->
                        <label for="tagline" class="form-label">Site Tagline</label>
                        <input name="tagline" type="text" class="form-control" id="tagline">
                    </div>
                    <div class="input-group mb-3"><!-- INSERT LOGO -->
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Logo</span>
                        </div>
                        <div class="custom-file">
                            <input name="logo_image" type="file" class="custom-file-input">
                            <label class="custom-file-label">Choose file (Recommended Size 170*50 pixel)</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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

<!-- SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>