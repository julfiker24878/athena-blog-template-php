<?php

require '../db.php';
require '../dashboard_includes/header.php';
require '../session.php';

$id = $_GET['id']; 
$select = "SELECT * FROM important_links WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Link</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_important_links.php" method="POST">
					<div class="mb-3"><!-- TITLE -->
					<label for="title" class="form-label">Title</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['title']; ?>" name="title" type="text" class="form-control" id="title">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="link" class="form-label">Link</label>
						<input value="<?= $after_assoc['link']; ?>" name="link" type="text" class="form-control" id="link">
					</div>

					<button type="submit" class="btn btn-primary">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SUCCESS SESSION IN SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>