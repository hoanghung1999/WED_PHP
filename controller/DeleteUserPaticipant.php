<?php
session_start();
require_once "dbConnect.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){

    $iduser=$_GET['id'];
    echo $iduser;
    $connect=new DBConnect();
    $conn=$connect->getConnect();
    $stmt=$conn->prepare("DELETE FROM userparticipant WHERE id=?");
    $stmt->bind_param('i',$iduser);
    $result=$stmt->execute();
    
    if($result){
        $_SESSION['message']="Xóa thành công";
        header("location:../userParticipant.php");
    }
    else{
        echo $stmt->error;
    }
}

?>