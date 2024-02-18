<?php 

require './dashboard_includes/header.php';
require './db.php';

$email = $_SESSION['email'];

$select_users = "SELECT * FROM users WHERE email='$email' ";
$users_query = mysqli_query($db_connect, $select_users);
$users_assoc = mysqli_fetch_assoc($users_query);

?>


<div class="page-titles">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
		<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
	</ol>
</div>
<!-- row -->
<div class="row">
	<div class="col-lg-12">
		<div class="profile card card-body px-3 pt-3 pb-0">
			<div class="profile-head">
				<div class="photo-content">
					<div class="cover_photo">
						<img src="<?= ($users_assoc['cover_photo'] == '')? '/athena/users/uploads/cover.png' : '/athena/users/uploads/cover/'.$users_assoc['cover_photo'] ?>" class="img-fluid" alt="cover-photo" style="width: 100%; height: 450px; object-fit: cover;">
					</div>
				</div>
				<div class="profile-info">
					<div class="profile-photo">
						<img src="<?= ($users_assoc['profile_image'] == '')? '/athena/users/uploads/default.png' : '/athena/users/uploads/profile/'.$users_assoc['profile_image'] ?>" class="img-fluid rounded-circle" alt="">
					</div>
					<div class="profile-details">
						<div class="profile-name px-3 pt-2">
							<h4 class="text-primary mb-0"><?= $users_assoc['name']; ?></h4>
							<p><?php
								if($users_assoc['role'] == 1){
									echo "Admin";
								}elseif($users_assoc['role'] == 2){
									echo "Moderator";
								}elseif($users_assoc['role'] == 3){
									echo "Editor";
								}else{
									echo "Subscriber";
								}
							?></p>
						</div>
						<div class="profile-email px-2 pt-2">
							<h4 class="text-muted mb-0"><?= $users_assoc['email']; ?></h4>
							<p>Email</p>
						</div>
						<div class="dropdown ml-auto">
							<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
							<ul class="dropdown-menu dropdown-menu-right">
								<a href="./users/edit_settings.php"><li class="dropdown-item"><i class="fa-solid fa-gear"></i> Settings</li></a>
								<a href="./users/edit_desc.php"><li class="dropdown-item"><i class="fa-solid fa-pen-to-square"></i> Edit Description</li></a>
								<a href="./users/edit_password.php"><li class="dropdown-item"><i class="fa-solid fa-key"></i> Change Password</li></a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-body">
				<div class="profile-about-me">
					<div class="pt-4 border-bottom-1 pb-3">
						<h4 class="text-primary">About Me</h4>
						<p class="mb-2"><?= ($users_assoc['about'] == '')? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.' : $users_assoc['about'] ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end $users_assoc['about']
***********************************-->

<?php 

require './dashboard_includes/footer.php';

?>