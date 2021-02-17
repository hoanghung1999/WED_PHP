<?php
session_start();
require_once "dbConnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty(trim($_POST['fullname'])) || empty(trim($_POST['address']))
    || empty(trim($_POST['phone'])) || empty(trim($_POST['username']))|| empty(trim($_POST['password'])) )
    {
        if(empty(trim($_POST['fullname']))){
            $_SESSION['er_re_fullname']='Chưa nhập họ tên';
        }
        if(empty(trim($_POST['address']))){
            $_SESSION['er_re_address']='Chưa nhập địa chỉ';
        }
        if(empty(trim($_POST['phone']))){
            $_SESSION['er_re_phone']='Chưa nhập SĐT';
        }
        if(empty(trim($_POST['username']))){
            $_SESSION['er_re_username']='Chưa nhập tên tài khoản';
        }
        if(empty(trim($_POST['password']))){
            $_SESSION['er_re_password']='Chưa nhập mật khẩu';
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        $fullname=$_POST['fullname'];
        $email="";
        if(isset($_POST['email'])){
        $email=$_POST['email'];
        }
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("INSERT INTO `user`(`fullname`,`email`,`address`,`phone`,`username`,`password`) VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$fullname,$email,$address,$phone,$username,$password);
        $result=$stmt->execute();
        if($result){
            echo '<script>alert("Đăng kí thành công cmnr <3");
            window.open("../login.php","_self");
            </script>';
        }else{
            echo '<script>alert("user đã có rồi myboss <3");
            window.open("../register.php","_self");
            </script>';
        }
    }

}
