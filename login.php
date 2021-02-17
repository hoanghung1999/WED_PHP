<?php
require_once 'controller/loginControl.php';
require_once 'controller/LoginwithFB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="./assets/css/login/login.css">
	

</head>
<body>
    <div class="container">
		<a href="index.php"><img src="assets/img/logo/hoanghung.png" alt="a"/></a>
		<header>Đăng Nhập</header>
		<form method="POST" action="controller/loginControl.php">
		<!-- login fail -->
		<?php
		if(isset($_SESSION['login_err'])){
		echo '<div style="color:red;">
		<strong>'.$_SESSION['login_err'].'</strong></div>';
		unset($_SESSION['login_err']);
		}
		?>
		<div class="input-field">
				<input type="text" name="username" required>
				<label>Tên tài khoản</label>
			</div>
			<div class="input-field">
				<input class="pswrd" type="password" name="password" required>
				<span class="show">hiển thị</span>
				<label>Mật khẩu</label>
			</div>
			<div class="button">
				<div class="inner">
				</div>
				<button>Đăng Nhập</button>
			</div>
		</form>
		<div class="auth">
		Hoặc đăng nhập với</div>
		<div class="links">
			<div class="facebook">
				<a href="<?= htmlspecialchars($facebook_login_url) ;?>"><i class="fab fa-facebook-square"><span>Facebook</span></i></a>
			</div>
			<div class="google">
				<i class="fab fa-google-plus-square"><span>Google</span></i>
			</div>
		</div>
		<div class="signup">
			Chưa có tài khoản? <a href="register.php">Đăng Kí</a>
		</div>
    </div>
    <script src="./assets/js/login.js"></script>
    
</body>

</html>