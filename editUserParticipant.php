<?php
session_start();
require_once "controller/userControl.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $iduser = $_GET['iduser'];
    $usercontrol = new userControl();
    $user = $usercontrol->getUserById($iduser);
}
include "admin.php";
?>
<div id="content">
    <div class="container col-xl-6 col-sm-12">
        <div class="jumbotron">
            <h3 class="text-center" style="color: red;">Sửa Thông Tin</h3>
            <form method="POST" action="controller/updateUserParticipant.php">
                <input type="hidden" class="form-control align-center" name="id" value="<?= $iduser ?>" required>
                <div class="form-group">
                    <label>Họ Tên:</label>
                    <input type="text" class="form-control align-center" name="fullname" value="<?= $user['fullname'] ?>">
                    <?php
                    if (isset($_SESSION['error_fullname'])) {
                        echo '<span style="color: red;"><i>' . $_SESSION['error_fullname'] . '</i></span>';
                        unset($_SESSION['error_fullname']);
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control align-center" name="email" value="<?= $user['email'] ?>" required>
                    <?php
                    if (isset($_SESSION['error_email'])) {
                        echo '<span style="color: red;"><i>' . $_SESSION['error_email'] . '</i></span>';
                        unset($_SESSION['error_fullname']);
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>Địa chỉ:</label>
                    <input type="text" class="form-control align-center" name="address" value="<?= $user['address'] ?>" required>
                    
                    <?php
                    if (isset($_SESSION['error_address'])) {
                        echo '<span style="color: red;"><i>' . $_SESSION['error_address'] . '</i></span>';
                        unset($_SESSION['error_address']);
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="pwd">SĐT:</label>
                    <input type="number" class="form-control" name="phone" value="<?= $user['phone'] ?>" required>
                   
                   <?php
                    if (isset($_SESSION['error_phone'])) {
                        echo '<span style="color: red;"><i>' . $_SESSION['error_phone'] . '</i></span>';
                        unset($_SESSION['error_phone']);
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-info">Lưu</button>
            </form>
        </div>
    </div>

</div>