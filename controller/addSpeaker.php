<?php
require_once "dbConnect.php";

if($_SERVER['REQUEST_METHOD']=='GET'){
    $iduser=$_GET['id'];
    $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("SELECT * FROM speaker WHERE iduser=?");
        $stmt->bind_param("i",$iduser);
        $stmt->execute();
        $resultSet=$stmt->get_result();
        if($resultSet->num_rows==1){
            echo "
            <script>
            alert('User này đã làm speaker');
            window.history.back();
            </script>
            ";
        }else{
            $stmt2=$conn->prepare("INSERT INTO `speaker`(`iduser`) VALUES (?)");
            $stmt2->bind_param("i",$iduser);
            $stmt2->execute();
            echo '
            <script>
            alert("đã thêm user làm speaker");
            window.history.back();
            </script>
            ';
        }
}
?>