<?php
require_once "userControl.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    if (empty(trim($_POST['fullname'])) || empty(trim($_POST['email'])) || empty(trim($_POST['address'])) || empty(trim($_POST['phone']))) {
        if(empty(trim($_POST['fullname']))) $_SESSION['error_fullname']="Không được để trống họ tên";
        if(empty(trim($_POST['email']))) $_SESSION['error_email']="Không được để trống Email";
        if(empty(trim($_POST['address']))) $_SESSION['error_address']="Không được để trống địa chỉ";
        if(empty(trim($_POST['phone']))) $_SESSION['error_phone']="Không được để trống SĐT";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        
    } 
    else {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $userControl = new userControl();
        $result = $userControl->updateUserByID2($id, $fullname, $email, $address, $phone);

        if ($result) {
            $_SESSION['message'] = "Sửa thành công";
            header("location:../userParticipant.php");
        } else {
            $_SESSION['message'] = "Sửa thành thất bại";
            header("location:../userParticipant.php");
        }
    }
}
