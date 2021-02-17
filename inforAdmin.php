<?php
session_start();
include "admin.php";
require_once "controller/userControl.php";
$usercontrol = new userControl();
$user = $usercontrol->getUserById($_SESSION['id']);
?>


<link rel="stylesheet" href="assets/css/admin/adminprofile.css">
<link rel="stylesheet" href="assets/css/imgcss/img.css">
<div id="content">

    <!-- Modal -->
    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLabel">Sửa thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="controller/updateUser.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ Tên</label>
                            <input type="text" class="form-control" name="fullname" value="<?= $user['fullname'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa Chỉ</label>
                            <input type="text" class="form-control" name="address" value="<?= $user['address'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số Điện Thoại</label>
                            <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="text" class="form-control" name="password" value="<?= $user['password'] ?>" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center" style="margin-bottom: 20px; color:red"><b>Profile</b></h3>
            <div class="row" style="">
                <div class="col-lg-6">
                    <?php
                    if(is_null($_SESSION['avatar']) || $_SESSION['avatar']=='')
                    echo '<img src="avatar/AvatarDefault.png" alt="">';
                    else
                    echo '<img src="'.$_SESSION['avatar'].'" alt="">'
                    ?>
                </div>
                <div class="col-lg-6">

                    <form method="POST" action="controller/updateUserParticipant.php">
                        <input type="hidden" class="form-control align-center" name="id" value="<?= $iduser ?>" readonly>
                        <div class="form-group">
                            <label>Họ Tên:</label>
                            <input type="text" class="form-control align-center" name="fullname" value="<?= $user['fullname'] ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control align-center" name="email" value="<?= $user['email'] ?>" readonly>

                        </div>
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control align-center" name="address" value="<?= $user['address'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="pwd">SĐT:</label>
                            <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" readonly>
                        </div>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#update"><i class="fas fa-edit"></i>Sửa thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>