<?php
require_once "dbConnect.php";
class userControl{
    
    function getAllUserParticaipant(){
    $connect= new DBConnect();
    $conn=$connect->getConnect();
    $sql="SELECT * FROM `user` as u JOIN `userparticipant` as up ON u.id=up.iduser WHERE up.status='1'";
    $result=$conn->query($sql);
    return $result;
    }

    function getAllUserSubcriber(){
        $connect= new DBConnect();
        $conn=$connect->getConnect();
        $sql="SELECT u.id as id, u.fullname,u.address,u.phone,u.email FROM `user` as u JOIN `userparticipant` as up ON u.id=up.iduser WHERE up.status='0'";
        $result=$conn->query($sql);
        return $result;
    }


    function deleteUserById($id){
    $connect=new DBConnect();
    $conn=$connect->getConnect();
    $stmt=$conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param('i',$id);
    $result=$stmt->execute();   
    return $result;
    }
    

    function getUserById($id){
    $connect=new DBConnect();
    $conn=$connect->getConnect();
    $stmt=$conn->prepare("SELECT * FROM `USER` WHERE id=?");
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $resultSet=$stmt->get_result();
    $user= $resultSet->fetch_assoc();
    return $user;
    }
    function updateUserByID($id,$fullname,$email,$address,$phone,$password){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("UPDATE user SET fullname=? ,email=?, address=? ,phone=?,password=? Where id= ?");
        $stmt->bind_param('sssssi',$fullname,$email,$address,$phone,$password,$id);
        $result=$stmt->execute();
        return $result;
    }
    function updateUserByID2($id,$fullname,$email,$address,$phone){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("UPDATE user SET fullname=? ,email=?, address=? ,phone=? Where id= ?");
        $stmt->bind_param('ssssi',$fullname,$email,$address,$phone,$id);
        $result=$stmt->execute();
        return $result;
    }
    function deleteUserSubcriber($id){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("DELETE FROM `userparticipant` WHERE iduser=?");
        $stmt->bind_param("i",$id);
        $result=$stmt->execute();
        return $result;
    }
    function UserSubtoParti($id){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("UPDATE `userparticipant` SET status='1' WHERE iduser=?");
        $stmt->bind_param("i",$id);
        $result=$stmt->execute();
        return $result;
    }
    function updateAvatar($linkImage,$iduser){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("UPDATE user SET avatar =? Where id= ? ");
        $stmt->bind_param('si',$linkImage,$iduser);
        $result=$stmt->execute();
        if($result) $_SESSION['avatar']=$linkImage;
        return $result;
    }
    function getALLSpeaker(){
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $result=$conn->query("SELECT speaker.id, user.id AS iduser,user.fullname,user.email,user.address,user.phone,user.avatar FROM user JOIN speaker WHERE user.id=speaker.iduser");
       return $result;
    }

}

?>