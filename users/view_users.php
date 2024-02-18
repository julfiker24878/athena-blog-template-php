<?php 

require './../dashboard_includes/header.php';
require './../db.php';
$role = $_SESSION['role'];

$select_users = "SELECT * FROM users";
$users_query = mysqli_query($db_connect, $select_users);

?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">All Users</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>SL NO.</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Profile Image</th>
                                <th>Role</th>
                                <th>Created At</th>

                                <?php if($role == 1 || $role == 2 || $role == 3){ ?>
                                <th>Actions</th>
                                <?php } ?>

                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($users_query as $key => $user){ ?>
                            <tr>
                                <td><strong><?= $key+1; ?></strong></td>
                                <td><div class="d-flex align-items-center"><span class="w-space-no"><?= $user['name']; ?></span></div></td>
                                <td><?= $user['username']; ?></td>
                                <td><?= $user['email']; ?>	</td>
                                <td><img src="./uploads/profile/<?= $user['profile_image']; ?>" class="rounded-lg mr-2" width="100" alt="profile-image"/></td>
                                <td><?php
                                    if($user['role'] == 1){
                                        echo '<span class="badge badge-pill badge-danger">Admin</span>';
                                    }elseif($user['role'] == 2){
                                        echo "Moderator";
                                    }elseif($user['role'] == 3){
                                        echo "Editor";
                                    }else{
                                        echo "Subscriber";
                                    }
                                ?></td>
                                <td><?= $user['created_at']; ?></td>

                                <?php if($role == 1 || $role == 2 || $role == 3){ ?>
                                <td>
                                    <div class="d-flex">
                                        <?php if($role == 1 || $role == 3){ ?>
                                            <a href="./edit_users.php?id=<?= $user['id']; ?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <?php } ?>
                                        <?php if($role == 1 || $role == 2){ ?>
                                            <a href="./delete_users.php?id=<?= $user['id']; ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>
                                <?php } ?>

                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require './../dashboard_includes/footer.php'; ?>