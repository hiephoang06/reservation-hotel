<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		include("menu.php");
	?>
</head>
<body>
	<table border="1">
		<tr>
			<td>STT</td>
			<td>User</td>
			<td>Tên</td>
			<td>Xóa</td>
		</tr>

	
	<?php
		$sql = "SELECT * FROM taikhoan";
		$kq = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_assoc($kq)){
			echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['name']."</td>";
				echo '<td><a href = "xoanguoidung.php?id='.$row['id'].'">Xóa</a></td>';
			echo "</tr>";
		}
	?>
</table>
</body>
</html>