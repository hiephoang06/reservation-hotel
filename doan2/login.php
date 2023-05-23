<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	.bt{
		background-color: #fff;
	    display: inline-block;
	    padding: 10px 25px;
	    text-transform: capitalize;
	    font-size: 16px;
	    border: 1px solid #3ac4fa;
	    margin-bottom: 10px;
	}
	.ip{
		border: 1px solid #3ac4fa;
	}
	.alo{
		border:2px solid;
		border-color: #3ac4fa;
		margin-right: auto;
		margin-left: auto;
		width: 500px;
		text-align: center;
	}
</style>
<?php
	include('menu.php');
?>
<body>
	<img src="anh/signin.png" style="width: 100%;">
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$u = $_POST['user'];
			$p = $_POST['pass'];
			$sql = "SELECT * FROM taikhoan WHERE username = '$u' and password = '$p' ";
			$kq = mysqli_query($conn,$sql);
			if(mysqli_num_rows($kq)>0){
				while($row = mysqli_fetch_assoc($kq)){
				$_SESSION['ten'] = $row['ten'];
					echo "<script>alert('ĐĂNG NHẬP THÀNH CÔNG');
					window.location = 'index.php';
						</script>";
				}

			}
			else{
				echo " <script> alert ('Sai tên tài khoản hoặc mật khẩu')</script> ";
			}
		}
	?>
	<form method="POST" style="padding: 30px;">
		
		<div class="alo">
			<h3> ĐĂNG NHẬP</h3>
			<label style="margin-top: 15px;">Tên tài khoản</label><br>
			<input type="text" name="user"  required="" class="ip"><br>
			<br>
			<label>Mật khẩu</label><br>
			<input type="password" name="pass" required="" class="ip"><br>
			<br>
			<input type="submit" value="Đăng Nhập" class="bt">
		</div>
	</form>
</body>
</html>