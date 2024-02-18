<?php

require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-6 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Important Links</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_important_links.php" method="POST">
					<div class="mb-3"><!-- TITLE -->
						<label for="title" class="form-label">Title</label>
						<input name="title" type="text" class="form-control" id="title">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="link" class="form-label">Link</label>
						<input name="link" type="text" class="form-control" id="link">
					</div>

					<button type="submit" class="btn btn-primary">Add</button>
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