<?php 
require_once 'dbConnect.php';
session_start();
$username=$password="";
$username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $username_err = "Please enter password";
    } else {
        $password = trim($_POST["password"]);
    }


    if(empty($username_err) && empty($password_err)){
        $connnect=new DBConnect();
        $conn=$connnect->getConnect();
        $stmt= $conn->prepare("SELECT * FROM user WHERE username=? and password =?");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $result= $stmt->get_result();
        echo $result->num_rows;
        if($result->num_rows==1){
            $user=$result->fetch_assoc();
            $_SESSION['login']=true;
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['fullname']=$user['fullname'];
            $_SESSION['avatar']=$user['avatar'];
            $_SESSION['positon']=$user['positon'];
            if($_SESSION['positon']==1){
                header("location:../adminHome.php");
            }else{
                header('location:../CommonUser.php');
            }
        }
        else{
           $_SESSION["login_err"]="Tài khoản hoặc mật khẩu sai";
            header("location:../login.php");
    }
}
    else{
        $_SESSION["login_err"]="Tài khoản hoặc mật khẩu sai";
        header("location:../login.php");
    }
}
?>