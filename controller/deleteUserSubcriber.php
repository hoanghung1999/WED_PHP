<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        require_once "userControl.php";
        $userControl=new userControl();
        $result=$userControl->deleteUserSubcriber($id);
        if($result){
           header("location:../userSubcriber.php");
        }
        else{
            echo '<script>alert("ố ồ ");</script>';
        }
    }

}
?>