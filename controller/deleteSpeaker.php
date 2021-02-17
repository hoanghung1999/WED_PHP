<?php
require_once "dbConnect.php";

if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['id'])){
        $iduser=$_GET['id'];
        $connect=new DBConnect();
        $conn=$connect->getConnect();
        $stmt=$conn->prepare("DELETE FROM speaker WHERE id=?");
        $stmt->bind_param("i",$iduser);
        $stmt->execute();
        echo "
        <script>
        alert('đã xóa thành công :(');
        window.history.back();
        </script>
        ";
    }
}
?>