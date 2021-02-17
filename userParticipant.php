<?php
session_start();
include "admin.php";
?>

<div id="content">



  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">THÊM NGƯỜI THAM DỰ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="controller/AddNewUserParticipant.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Họ Tên</label>
              <input type="text" class="form-control" name="fullname" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Địa Chỉ</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Số Điện Thoại</label>
              <input type="number" class="form-control" name="phone" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
              <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="jumbotron">
      <div class="card text-center">
        <div class="card-header">
          Danh Sách Tham Dự
        </div>
        
        <div class="card-body">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add" style="position: absolute;top: 60px;left: 36px;display:flex;"><i class="fas fa-user-plus"></i>Thêm</button>
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
                  $userController= new userControl();
                  $result=$userController->getAllUserParticaipant();
                  $stt=1;
                  while($row=$result->fetch_assoc()){
                    echo '<tr>
                    <th scope="row">'.$stt++.'</th>'.
                    '<td>'.$row['fullname'].'</td>'.
                    '<td>'.$row['email'].'</td>'.
                    '<td>'.$row['address'].'</td>'.
                    '<td>'.$row['phone'].'</td>'.
                    '<td>';

                    echo  '<a href="editUserParticipant.php?iduser='.$row['iduser'].'"><button  class="btn btn-success"><i class="fas fa-edit"></i></button></a>'; 
                    echo '<a href="controller/DeleteUserPaticipant.php?id='.$row['id'].'"><button  onclick="return confirm(`Bạn muốn xóa người này khỏi danh sách`)" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></a>
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
