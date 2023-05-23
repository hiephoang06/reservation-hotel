<!DOCTYPE html>
<html>
<head>
	<?php
		include("menu.php");
	?>
	<title></title>
<?php
	if(isset($_SESSION['ten'])){
	$x= $_SESSION['ten'];
	echo "<script> var ten = '$x'; </script>";
	}
?>
<script type="text/javascript">
		$(document).ready(function(){
			$("#guibinhluan").click(function(){
				var url_string = window.location.href;
				var url = new URL(url_string);
				var idsp = url.searchParams.get("id");
				var txt = $("#noidungbinhluan").val();
				$.post("xulybinhluan.php",{ten:ten , noidung:txt , id: idsp},function(result){
					if(txt==""){
						$("#dsbinhluan").append();
					}else
					$("#dsbinhluan").append(ten+ ':' +txt+'<hr>');
				});
			});
		});
</script>
</head>
<body>
	<?php
		$id = $_GET['id'];
		$sql = "SELECT * FROM phong where id = $id";
		$kq = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($kq);	
		echo '<img src = "anh/'.$row['anhtren'].'" style = "width:100%;"><br><br><br>';
		echo "<div class = 'container'>";
			echo "<div class = 'row'>";
				echo "<div class = 'col-sm-10' style='font-size:120%;'>";
					echo "<br>";
					echo "<b>".$row['ten']."</b>";
					echo "<b style='margin-left:600px;'> $".$row['gia']."</b>";
					echo '<img src = "anh/'.$row['anh'].'" style = "width:90%;"><br><br><br>';
					echo "ROOM FACILITIES";
					echo "<p>".$row['mota1']."</p>";
					echo "<br><br>";
					echo "<hr>";
					echo "<form method = 'POST'>";
					echo "<input type = 'submit' name = 'submit' value='Đặt lịch'>";
					echo '</form>';
				echo "</div>";
	?>
	<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(isset($_SESSION['ten'])){
				header("location: datphong.php?id=".$row['id']." ");
			}
			else{
				header("location:login.php");
			}
		}
	?>
		<div class="col-sm-2">
		<input type="text" id="noidungbinhluan">
		<input type="submit" id="guibinhluan" value="Gửi">
		<?php
			$sql = "SELECT * FROM binhluan WHERE idks = $id";
			$ketqua1= mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($ketqua1)){
				echo "<p>".$row['ten'].":".$row['noidung'].'</p><hr>';
			}
		?>
		<div id="dsbinhluan">
		
		</div>
		</div>
		</div>
	</div>
	
</body>
</html>