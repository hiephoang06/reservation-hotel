<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","doan2");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.abc{
			color: #7a7e84;
		}
		.abc:hover{
			color: #3ac4fa;
			text-decoration: none;
		}
	</style>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="css/jquery1.min.js"></script>
		<script src="css/bootstrap.min.js"></script>	
</head>
<body>

	<div class="top-head" style="background-color: #313a45;padding: 13px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					
				</div>
				<div class="col-sm-3">
					<?php
						if(!isset($_SESSION['ten'])){
							echo '<a href="login.php" class="abc">Login |</a>';
							echo '<a href="register.php" class="abc"> Register</a>';
						}
						else{
							echo '<b style = "color:#7a7e84;">CHÀO '. $_SESSION['ten'].' | </b> <a href="logout.php"> Logout</a>';
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container" style="padding: 23px 0 ;">
			<div class="row">
				<div class="col-sm-3">
					<img src="anh/logo.png">
				</div>
				<div class="col-sm-2" style="padding: 12px 0 ;font-family: 'Playfair Display', serif;">
					<a href="index.php" style="color: black;">TRANG CHỦ</a>
				</div>
				<div class="col-sm-2" style="padding: 12px 0 ;font-family: 'Playfair Display', serif;">
					<a href="#datphong" style="color: black;">ĐẶT PHÒNG</a>
				</div>
				<div class="col-sm-2" style="padding: 12px 0 ;font-family: 'Playfair Display', serif;">
					<a href="#nhahang" style="color: black;">NHÀ HÀNG</a>
				</div>
				<div class="col-sm-2" style="padding: 12px 0 ;font-family: 'Playfair Display', serif;">
					<a href="index.php" style="color: black;">HÌNH ẢNH</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>