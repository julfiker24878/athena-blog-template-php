<?php

require '../db.php';
require '../dashboard_includes/header.php';
require '../session.php';

$select = "SELECT * FROM footer_credit";
$select_result = mysqli_query($db_connect, $select);
?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-info">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Footer Credit</h2>
			</div>

			<?php if(isset($_SESSION['deleted'])){ ?>
				<div class="alert alert-danger">
					<?= $_SESSION['deleted']; ?>
				</div>
			<?php } unset($_SESSION['deleted']); ?>

			<!-- CARD BODY -->
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">T.F.</th>
							<th scope="col">Footer Credit</th>
							<th scope="col">Link Text</th>
							<th scope="col">Link</th>
							<th scope="col">Edit</th>
							<th scope="col">Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($select_result as $tf => $result){ ?>
							<tr>
								<th scope="row"><?= $tf+1; ?></th>
								<td><?= $result['credit']; ?></td>
								<td><?= $result['link_text']; ?></td>
								<td><?= $result['link']; ?></td>
								<td><a href="edit_footer_credit.php?id=<?= $result['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
								<td><a href="delete_footer_credit.php?id=<?= $result['id']; ?>" class="btn btn-danger"><i class='fas fa-trash-alt'></i></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php
				$rowcount = mysqli_num_rows($select_result);
				if($rowcount == 0){ ?>
					<div class="alert alert-info">
						<?php echo "No content have been added yet!" ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>