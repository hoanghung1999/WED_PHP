<?php
session_start();
require_once "dbConnect.php";
if(isset($_SESSION['id'])){
    $connect=new DBConnect();
    $conn=$connect->getConnect();
    // kiểm tra xem user đã đăng kí hay chưa
    $stmt1=$conn->prepare("SELECT * FROM userparticipant WHERE iduser=?");
    $stmt1->bind_param("i",$_SESSION['id']);
    $stmt1->execute();
    $resultSet=$stmt1->get_result();
    $result=$resultSet->num_rows;
    if($result==1){
        echo '<script>
        alert("Băn đã đăng kí rồi");
        window.open("../CommonUser.php","_self");
        </script>';
    }else{
    //
    $stmt2=$conn->prepare("INSERT INTO `userparticipant`(`iduser`,`status`) VALUES(?,?)");
    $id=$_SESSION['id'];
    $status='0';
    $stmt2->bind_param("is",$id,$status);
    $resultex=$stmt2->execute();
    if($resultex){
        echo '<script>
        alert("Bạn đã đăng kí  thành công");
        window.open("../CommonUser.php","_self");
        </script>';
    }else{
        echo '<script>
        alert("Bạn đã đăng kí không thành công");
        window.open("../CommonUser.php","_self");
        </script>';
    }
    }
}

?>