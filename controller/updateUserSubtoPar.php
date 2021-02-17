<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require_once "userControl.php";
        $userControl=new userControl();
        $result=$userControl->UserSubtoParti($id);
        if($result){
            echo '<script>alert("đã thêm thành công");
                window.open("../userParticipant.php","_self");
            </script>';
        }
        else{
            echo '<script> alert("ố ồ")<script>';
        }
    }
}
?>