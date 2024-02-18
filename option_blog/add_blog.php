<?php

require '../dashboard_includes/header.php';
require '../db.php';

$select_tags = "SELECT * FROM tags";
$tags_query = mysqli_query($db_connect, $select_tags);

$select_category = "SELECT * FROM category";
$category_query = mysqli_query($db_connect, $select_category);

?>

<div class="row">
	<div class="col-md-10 m-auto">
		<div class="card">
			<div class="card-header">
				<h2>Add Post</h2>
			</div>
			<div class="card-body">
				<form action="post_blog.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="title" class="form-label">Title</label>
						<input name="title" type="text" class="form-control" id="title">
					</div>
					<div class="mb-3">
						<label for="des" class="form-label">Description</label>
						<textarea name="des" class="form-control" id="des" rows="10"></textarea>
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Upload</span>
						</div>
						<div class="custom-file">
							<input name="blog_image" type="file" class="custom-file-input">
							<label class="custom-file-label">Post Thumbnail</label>
						</div>
						<?php if(isset($_SESSION['invalid_extension'])){ ?>
							<div class="alert alert-warning mt-2">
								<?= $_SESSION['invalid_extension']; ?>
							</div>
						<?php } unset($_SESSION['invalid_extension']); ?>

						<?php if(isset($_SESSION['invalid_size'])){ ?>
							<div class="alert alert-warning mt-2">
								<?= $_SESSION['invalid_size']; ?>
							</div>
						<?php } unset($_SESSION['invalid_size']); ?>
					</div>

					<div class="input-group m-5">
						<select class="default-select" name="category">
							<option selected>Choose...</option>

							<?php foreach($category_query as $categories){ ?>
							<option value="<?= $categories['name']; ?>"><?= $categories['name']; ?></option>
							<?php } ?>
							
						</select>
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">Select Category</button>
						</div>
					</div>

					<div class="mb-3">
						<label class="form-label mt-2">Tags</label>
					</div>
					<div class="form-group mb-5">

					<?php foreach($tags_query as $tags){ ?>
						<div class="form-check form-check-inline">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" value="<?= $tags['id']; ?>" name="tags"><?= $tags['name']; ?>
							</label>
						</div>
					<?php } ?>

					</div>

					<button type="submit" class="btn btn-primary">Publish</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php require '../dashboard_includes/footer.php'; ?>

<?php if(isset($_SESSION['success'])){ ?>
<script type="text/javascript">
	Swal.fire(
	  'Congratulations!',
	  '<?= $_SESSION['success']; ?>',
	  'success'
	)
</script>
<?php } unset($_SESSION['success']); ?>