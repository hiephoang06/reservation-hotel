<?php
	$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","doan");
$sql = "DELETE FROM taikhoan WHERE id= $id ";
$kq = mysqli_query($conn,$sql);
echo "<script>
		alert('oke');
		window.location = 'hienthiuser.php';
	</script>";
?>