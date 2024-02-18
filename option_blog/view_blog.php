<?php

require '../db.php';
require '../dashboard_includes/header.php';
require '../session.php';

$select = "SELECT * FROM blogs";
$select_result = mysqli_query($db_connect, $select);
?>

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h2>All Blogs</h2>
			</div>
			<?php if(isset($_SESSION['deleted'])){ ?>
				<div class="alert alert-danger">
					<?= $_SESSION['deleted']; ?>
				</div>
			<?php } unset($_SESSION['deleted']); ?>
			<div class="card-body">
				<table class="table table-bordered">
						<thead>
						<tr>
							<th scope="col">T.B.</th>
							<th scope="col">Title</th>
							<th scope="col">Description</th>
							<th scope="col">Category</th>
							<th scope="col">Tags</th>
							<th scope="col">Post Thumbnail</th>
							<th scope="col">Posted At</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach($select_result as $tp => $result){ ?>
							<tr>
								<th scope="row"><?= $tp+1; ?></th>
								<td><?= $result['title']; ?></td>
								<td><?= substr($result['des'], 0, 50) ?></td>
								<td><?= $result['category']; ?></td>
								<td><?= $result['tags']; ?></td>
								<td><img src="uploaded/<?= $result['blog_image']; ?>" width='50' class='img-fluid'></td>
								<td><?= $result['posted_at']; ?></td>
								<td><a href="edit_blog.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
								<td><a href="delete_blog.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<?php
						$rowcount = mysqli_num_rows($select_result);
						if($rowcount == 0){ ?>
							<div class="alert alert-info">
								<?php echo "No banners have been added yet!" ?>
							</div>
						<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php require '../dashboard_includes/footer.php'; ?>