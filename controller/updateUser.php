<?php
require_once "userControl.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id'];
    if (empty(trim($_POST['fullname'])) || empty(trim($_POST['email'])) || empty(trim($_POST['address'])) || empty(trim($_POST['phone']) ||
        empty(trim($_POST['password'])))) {
        if (empty(trim($_POST['fullname']))) $_SESSION['error'] = "Không được để trống họ tên";
        if (empty(trim($_POST['email']))) $_SESSION['error'] = "Không được để trống Email";
        if (empty(trim($_POST['address']))) $_SESSION['error'] = "Không được để trống địa chỉ";
        if (empty(trim($_POST['phone']))) $_SESSION['error'] = "Không được để trống SĐT";
        if (empty(trim($_POST['password']))) $_SESSION['error'] = "Không được để trống mật khẩu";
        if ($_SESSION['positon'] == 1) {
            echo '<script>alert("' . $_SESSION['error'] . '");
        window.open("../inforadmin.php","_self");
        </script>';
        } else {
            echo '<script>alert("' . $_SESSION['error'] . '");
        window.open("../inforUser.php","_self");
        </script>';
        }
    } else {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $userControl = new userControl();
        $result = $userControl->updateUserByID($id, $fullname, $email, $address, $phone, $password);

        if ($result) {
            if ($_SESSION['positon'] == '1') {
                echo '<script> alert("Sửa thành công");
                window.history.back();
                </script>';
            } else {
                echo '<script> alert("Sửa thành công");
                window.history.back();
        </script>';
            }
        } else {

            if ($_SESSION['positon'] == '1') {
                echo '<script> alert("Sửa thất bại ");
                window.history.back();
            </script>';
            } else {
                echo '<script> alert("Sửa thất bại");
                window.history.back();
        </script>';
            }
        }
    }
}
