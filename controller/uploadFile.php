<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['file']['error'] > 0) {
        echo "<script>alert('data upload error');window.history.back()</script>";
    }
    $filename = $_FILES["file"]["name"];
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
    $file_ext = substr($filename, strripos($filename, '.')); // get file name
    $now = new DateTime();
    $newfilename = md5($file_basename . $now->getTimestamp()) . $file_ext;
    $allowed_file_types = array(".jpg", ".png");
    if (in_array($file_ext, $allowed_file_types)) {

        if (file_exists("../uploads/" . $newfilename)) {
            echo "<script>alert('FILE EXISTS');window.history.back();</script>";
        } else {

            if (move_uploaded_file($_FILES["file"]["tmp_name"], "../avatar/" . $newfilename)) {
                $linkavatar = "avatar/" . $newfilename;
                require_once "userControl.php";
                $usercontrol = new userControl();
                $result = $usercontrol->updateAvatar($linkavatar, $_SESSION['id']);
                if ($result) {
                    echo "<script>alert('Ảnh đại diện đã được cập nhật');window.history.back()</script>";
                } else {
                    echo "<script>alert('error');window.history.back()</script>";
                }
            } else {
                echo "Lỗi upload file";
            }
        }
    } else {
        echo "<script>alert('File này không được cho phép');window.history.back()</script>";
    }
}
