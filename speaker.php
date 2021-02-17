<?php
session_start();
include "admin.php";

?>

<div id="content">

  <div class="container">
    <div class="jumbotron">
      <div class="card text-center">
        <div class="card-header">
          Diễn Giả
        </div>
        
        <div class="card-body">
          <button onclick='window.open("userSystem.php","_self")' class="btn btn-success" style="position: absolute;top: 60px;left: 36px;display:flex;"><i class="fas fa-user-plus"></i>Thêm</button>
          <?php
          if(isset($_SESSION['message'])){
        echo  '<strong class="alert alert-success">'.$_SESSION['message'].'</strong>' ;
        unset($_SESSION['message']);
        }
          ?>
          <div class="container" style="padding-top: 35px;">
            <div class="row">
              <div class="col-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Họ Tên</th>
                      <th scope="col">email</th>
                      <th scope="col">Địa Chỉ</th>
                      <th scope="col">SĐT</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  require_once "controller/userControl.php";
                  $userController=new userControl();
                  $listSpeaker=$userController->getALLSpeaker();
                  $stt=1;
                  while($row=$listSpeaker->fetch_assoc()){
                    echo '<tr>
                    <th scope="row">'.$stt++.'</th>'.
                    '<td>'.$row['fullname'].'</td>'.
                    '<td>'.$row['email'].'</td>'.
                    '<td>'.$row['address'].'</td>'.
                    '<td>'.$row['phone'].'</td>'.
                    '<td>';

                    echo '<a href="controller/deleteSpeaker.php?id='.$row['id'].'"><button  onclick="return confirm(`Bạn muốn xóa người này khỏi danh sách`)" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
                    </td>
                  </tr>';
                  }
                  ?>  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
