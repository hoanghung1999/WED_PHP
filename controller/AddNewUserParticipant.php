<?php
require_once "dbConnect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname=trim($_POST["fullname"]);
    $email=trim($_POST['email']);
    $address=trim($_POST['address']);
    $phone=trim($_POST['phone']);
    $connection=new DBConnect();
    $conn=$connection->getConnect();
    $stmt_user=$conn->prepare('INSERT INTO user(fullname,email,address,phone) VALUES(?,?,?,?)');
    $stmt_user->bind_param("ssss",$fullname,$email,$address,$phone);
    if(!$stmt_user->execute()){
        echo "error in execute".$stmt_user->error;
    }
    $idUser=$stmt_user->insert_id;
    $result_register=$conn->query("INSERT INTO `userparticipant`(`iduser`, `status`) 
    VALUES ('$idUser','1')");
    if($result_register){
        echo '<script>alert("Thêm Thành Công");
            window.open("../userParticipant.php","_self");
        </script>';
        // header("location:../userParticipant.php");
    }else{
        echo $conn->error;
    }
}


?>