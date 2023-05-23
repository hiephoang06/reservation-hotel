<!DOCTYPE html>
<html>
<?php
	include("menu.php");
?>
<head>
	<title></title>
	<style type="text/css">
	</style>
</head>
<body>
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM tintuc where id = $id";
	$kq = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($kq);	
		echo '<img src = "anh/tintuc/'.$row['anh'].'" style = "width:100%;"><br><br><br>';
		echo "<div class = 'container'>";
			echo "<div class = 'row'>";
				echo "<div class = 'col-sm-7' style='background-color: #f0f0f0;font-size:120%;'>";
					echo "<br>";
					echo "<b>".$row['ten']."</b>";
					echo "<p>".$row['noidung']."</p>";
				echo "</div>";
?>
<?php
		echo"<div class = 'col-sm-3' style='margin-left:50px;'>";
			echo'<div style="background-color: #f0f0f0;">';
				echo'<b>Chuyên mục</b><br>';
	$sql1 = "SELECT * FROM tintuc";
	$kq1 = mysqli_query($conn,$sql1);
	while ($row = mysqli_fetch_assoc($kq1)){
			echo '<a href ="tintuc.php?id='.$row['id'].'">'.$row['ten'].'</a>';
			echo "<br>";		

	}		echo"</div>";
		echo "</div>";
?>
			<div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php
					$id = $_GET['id'];
					$sql = "SELECT * FROM tintuc where id = $id";
					$kq = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($kq)){
						echo '<img src = "anh/'.$row['anhmota'].'" style = "width:100%;"><br><br><br>';
					}
?>
			</div>
		</div>
	</div>
</body>
</html>