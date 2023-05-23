<?php
	include("menu.php");
?>
<?php
	$ten ='';
	$gia = '';
	if(isset($_GET['id'])){
	$sql = "SELECT * FROM phong where id=".$_GET['id'];
	$kq = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($kq);
	 //echo "<prE>";
	 //print_r($row);
	$ten = $row[2];
	$idanhmuc=$row[1];
	$gia = $row[4];
	}
?>
<?php
	if(isset($_POST['upd'])){
	$ten = $_POST['tenhang'];
	$gia = $_POST['gia'];
	$sql = "UPDATE phong SET ten = '$ten' , gia = $gia where id=".$_GET['id'];
	$kq = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($kq);
	header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h2>Sửa hàng</h2>
	<form method="POST">
	Tên mặt hàng: <input type="text" style = "margin-left: 10px;" name="tenhang" value="<?php echo $ten; ?>">
	<br>
	Giá: <input type="text" style = "margin-left: 82px;" name="gia" value="<?php echo $gia ?>"><br>
	<br>
	<br>
	<input type="submit" name="upd" value="Cập nhật">
</form>
</body>
</html>