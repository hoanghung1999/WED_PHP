<?php
session_start();
include "admin.php";
?>
<div id="content">
  <div class="container">
    <div class="jumbotron">
      <div class="card text-center">
        <div class="card-header">
          <h4 style="color:coral;">Danh Sách Đăng Kí Tham Dự</h4>
        </div>
        <div class="card-body">
          <div class="container" style="padding-top: 35px;">
            <div class="row">
              <div class="col-12">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Họ Tên</th>
                      <th scope="col">Email</th>
                      <th scope="col">Địa Chỉ</th>
                      <th scope="col">SĐT</th>
                      <th scope="col">Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    require_once "controller/userControl.php";
                    $userControl=new userControl();
                    $result=$userControl->getAllUserSubcriber();
                    $stt=1;
                    while($row=$result->fetch_assoc()){
                      echo
                      '<tr>
                      <th scope="row">'.$stt.'</th>'.
                      '<td>'.$row['fullname'] .'</td>'.
                      '<td>'.$row['email'].'</td>'.
                      '<td>'.$row['address'].'</td>'.
                      '<td>'.$row['phone'].'</td>'.
                      '<td>
                        <a href="controller/deleteUserSubcriber.php?id='.$row['id'].'"><button type="button" class="btn btn-danger" onclick="return confirm(`Bạn Muốn xóa khỏi danh sách`)"><i class="far fa-trash-alt"></i></button></a>
                       <a href="controller/updateUserSubToPar.php?id='.$row['id'].'"> <button type="button" class="btn btn-primary"><i class="fas fa-check"></i></button></a>
                      </td>
                    </tr>';
                    $stt++;
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