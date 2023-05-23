<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		margin-top: 50px;
		margin-left: auto;
		width: 500px;
		text-align: center;
	}
</style>
</head>
<?php
	include("menu.php");
?>
<body>
	<img src="anh/register.png" style="width: 100%;">
	<?php
	
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$u = $_POST['user'];
		$p = $_POST['password'];
		$s = $_POST['sdt'];
		$n = $_POST['name'];
		$sql = "SELECT * FROM taikhoan WHERE username = '$u' or phone = $s";
		$kq = mysqli_query($conn,$sql);
		if(mysqli_num_rows($kq)>0){
			echo "<script>alert('TÊN TÀI KHOẢN hoặc SỐ ĐIỆN THOẠI ĐÃ ĐƯỢC SỬ DỤNG')</script>";
		}
		else{
		$sql = "INSERT INTO taikhoan(username,password,phone,ten) VALUES('$u','$p',$s,'$n')";
		$kq = mysqli_query($conn,$sql);
		echo "<script>
			alert('Đăng ký thành công');
			window.location = 'login.php';
		</script>";
		}
	}
	?>

	<form method="POST" style="padding: 30px;">
		<div class="alo">
			<h3>ĐĂNG KÝ</h3>
			<label style="margin-top: 15px;">Tên tài khoản</label><br>
			<input type="text" name="user" required="" class="ip"><br><br>
			<label>Mật khẩu</label><br>
			<input type="password" name="password" required="" class="ip"><br><br>
			<label>Số điện thoại</label><br>
			<input type="text" name="sdt" required="" class="ip"><br><br>
			<label>Tên</label><br>
			<input type="text" name="name" required="" class="ip"><br><br><br>
			<input type="submit" name="submit" value="Đăng ký" class="bt">
		</div>
	</form>
</body>
</html>