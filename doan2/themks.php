<?php
	$conn = mysqli_connect("localhost","root","","giuaki");
	if(isset($_POST['add'])){
		$ten = $_POST['ten'];
		$gia = $_POST['gia'];
		$anh = $_POST['anh'];
		$anht = $_POST['anhtren'];
		$mota  = $_POST['mota'];
	$sql = "INSERT INTO phong(ten,gia,anh,mota,anhtren) VALUES('$ten',$gia,'$anh','$mota','$anht')";
	$kq = mysqli_query($conn,$sql);
		echo "<script>alert('oke');</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>
	<?php
		include("menu.php");
	?>
	<form method="POST">
	Tên sản phẩm: <input type="text" name="ten"><br>
	Giá: <input type="text" name="gia"><br>
	Số lượng: <input type="text" name="soluong"><br>
	Ảnh bìa: <input type="file" name="anh"><br>
	Ảnh phía trong: <input type="file" name="anhtren"><br>
	Mô tả: <input type="text" name="mota" placeholder="Sau dấu . nhớ <br>"><br>
	<input type="submit" name="add" value="Thêm sản phẩm">
	</form>
</body>
</html>