<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		tr td{
			padding: 15px;
		}
	</style>
	<?php
		include("menu.php");
	?>
</head>
<body>
	<div class="container" >
		<div class="row">
			<?php
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				$tk = $_SESSION['ten'];
				$id = $_GET['id'];
				$sn = $_POST['songuoi'];
				$sd = $_POST['sodem'];
				$n = $_POST['ten'];
				$p = $_POST['phone'];
				$note = $_POST['note'];
				$nn = $_POST['ngaynhanphong'];
				$sql = "INSERT INTO thongtindat(idphong,taikhoandat,songuoi,sodem,ten,phone,note,ngaynhanphong) VALUES ($id,'$tk',$sn,$sd,'$n',$p,'$note','$nn') ";
				$kq = mysqli_query($conn,$sql);
				echo "<script> 
						alert('Đặt phòng thành công');
					</script>";
				}
			?>
				<div class = 'col-sm-7'style="background-color: #f3f3f3;">
					<div>
						<h3>THÔNG TIN ĐẶT</h3>
					</div>
					<form method = "POST">
					<table border="0">
					<div>
						<tr>
							<td>
								<label>Ngày nhận phòng: </label>
							</td>
							<td>
								<input type = 'date' style="width: 183px;" name = 'ngaynhanphong'><br>
							</td>
						</tr>
						<tr>
							<td>
								<label>Số đêm</label>
							</td>
							<td>
								<select name="sodem" style="width: 183px; height: 28px;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label>Số người</label>
							</td>
							<td>
								<select name="songuoi" style="width: 183px; height: 28px;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label>Tên</label>
							</td>
							<td>
								<input type = 'text' name = 'ten'><br>
							</td>
						</tr>
						<tr>
							<td>
								<label>Số điện thoại</label>
							</td>
							<td>
								<input type = 'text' name = 'phone'><br>
							</td>
						</tr>
						<tr>
							<td>
								<label>Note</label>
							</td>
							<td>
								<input type = 'text' name = 'note'><br>
							</td>
						</tr>
					</div>
					</table>
					<input type="submit" name="submit" value="ĐẶT" style="margin-left: 250px;">
					</form>
				</div>
			
		</div>
	</div>
	
</body>
</html>