<?php
require_once 'controller/loginControl.php';
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/register/register.css">


</head>

<body>
	<div class="container">
		<header>Đăng Kí</header>
		<form method="POST" action="controller/registerUser.php">
			<div class="input-field">
				<input type="text" name="fullname" required>
				<label>Họ Tên</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_fullname'])){
			echo '<span>'.$_SESSION['er_re_fullname'].'</span>';
			unset($_SESSION['er_re_fullname']);
			}
			?>
			
			<div class="input-field">
				<input type="text" name="email" required>
				<label>Email</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_email'])){
			echo '<span>'.$_SESSION['er_re_email'].'</span>';
			unset($_SESSION['er_re_email']);
			}
			?>


			<div class="input-field">
				<input type="text" name="address" required>
				<label>Địa chỉ</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_address'])){
			echo '<span>'.$_SESSION['er_re_address'].'</span>';
			unset($_SESSION['er_re_address']);
			}
			?>

			<div class="input-field">
				<input type="text" name="phone" required>
				<label>SĐT</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_phone'])){
			echo '<span>'.$_SESSION['er_re_phone'].'</span>';
			unset($_SESSION['er_re_phone']);
			}
			?>

			<div class="input-field">
				<input type="text" name="username" required>
				<label>Tên tài khoản</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_username'])){
			echo '<span>'.$_SESSION['er_re_username'].'</span>';
			unset($_SESSION['er_re_username']);
			}
			?>

			<div class="input-field">
				<input class="pswrd" type="password" name="password" required>
				<span class="show">hiển thị</span>
				<label>Mật khẩu</label>
			</div>
			<?php         
			if(isset($_SESSION['er_re_password'])){
			echo '<span>'.$_SESSION['er_re_password'].'</span>';
			unset($_SESSION['er_re_password']);
			}
			?>
			<div class="button">
				<div class="inner">
				</div>
				<button>Đăng Kí</button>
			</div>
		</form>
	
		<div class="signup">
		 <a href="login.php">Trở Lại</a>
		</div>
	</div>
	<script src="./assets/js/login.js"></script>

</body>

</html>