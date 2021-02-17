<?php
session_start();
include "admin.php";
require_once "controller/userControl.php";

?>


<link rel="stylesheet" href="assets/css/admin/adminprofile.css">
<!-- <link rel="stylesheet" href="assets/css/imgcss/img.css"> -->
<link rel="stylesheet" href="assets/css/imgcss/avatar.css">
<div id="content">
    <div class="container">
        <div class="jumbotron">
                    <div class="user-profilesinglepage" id="avatar-header">
                        <div class="avatar-header">
                            <form action="controller/uploadFile.php" method="POST" enctype="multipart/form-data">
                            <div class="avatar-wrapper">
                                <?php
                                if($_SESSION['avatar']==''){
                                echo '<img class="profile-pic" src="" />';
                                }else{
                                    $src=$_SESSION['avatar'];
                                echo '<img class="profile-pic" src="'.$src.'" />';
                                }
                                ?>
                                <div class="upload-button">
                                </div>
                                <input class="file-upload" name="file" type="file">
                            </div>
                            <div class="nametitle text-center">
                                <h3><?php if(isset($_SESSION['fullname'])) echo $_SESSION['fullname'];?></h3>
                                <h5>Admin Hero</h5>
                            </div>
                            <div class="socialtitle text-center">
                                <a href="https://www.facebook.com/Hashtech-Academy-104675144484652" target="_blank"><i class="fa fa-facebook-f fb"></i></a>
                                <a href="https://www.instagram.com/hashtechacademy/" target="_blank"><i class="fa fa-instagram insta"></i></a>
                                <a href="https://twitter.com/HashtechA" target="_blank"><i class="fa fa-twitter twitter"></i></a>
                                <a ref="https://www.youtube.com/channel/UCcGQTLRIjg4A-Dc6LeLH6KA?view_as=subscriber" target="_blank"><i class="fa fa-youtube youtube"></i></a>
                            </div>
                               <button class="btn-success">SAVE</button>
                            </form>
                        </div>
                    </div>
                    
                    <script src="assets/js/avatar.js"></script>
               
        </div>
    </div>
</div>