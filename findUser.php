<?php
require_once "controller/dbConnect.php";
$connect = new DBConnect();
$conn = $connect->getConnect();
if (isset($_POST['query'])) {
    $sql = "SELECT * FROM user WHERE fullname like ?";
    $stmt = $conn->prepare($sql);
    $name=strtolower($_POST['query']);

    $name="%".$name."%";
    $stmt->bind_param("s",$name);
    $stmt->execute();
    $resultSet = $stmt->get_result();
    if ($resultSet->num_rows > 0) {
        $output = ' <table class="table table-bordered">
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
<tbody>';
        $stt = 1;
        while ($row = $resultSet->fetch_assoc()) {
            $output .= '<tr>
    <th scope="row">' . $stt++ . '</th>' .
                '<td>' . $row['fullname'] . '</td>' .
                '<td>' . $row['email'] . '</td>' .
                '<td>' . $row['address'] . '</td>' .
                '<td>' . $row['phone'] . '</td>' .
                '<td>'
                . '<a href="viewUser.php?id='.$row['id'].'"><button class="btn btn-primary"><i class="far fa-eye"></i></button></a>
    </td>
  </tr>';
        }
        $output .= '</tbody></table>';
        echo $output;
    } else {
        echo "Không có thông tin người này trong hệ thống";
    }
}
