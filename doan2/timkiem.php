	<?php
		include("menu.php");
	?>
	<?php   
	$gia1 = '';
		if(isset($_GET['search'])){
			$gia1 = $_GET['gia'];
		}
		$result1 = mysqli_query($conn, "SELECT * FROM phong  WHERE  gia <= $gia1 ");	
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="container">
		<div class="row">
			<?php
        while($row = mysqli_fetch_assoc($result1)){
        echo '<div class="col-sm-3">';
          echo '<div class="card">';
            echo '<a href = "chitietkhachsan.php?id='.$row['id'].'"><img src = "anh/'.$row['anh'].'" width="100%;">';
            echo '<div class="body-card">';
              echo '<h5><b>' .$row['ten']. '</h5></b>';
              echo "</a>";
              echo $row['mota'];
              if(isset($_SESSION['ten'])){
                if($_SESSION['ten']=='admin'){
                  echo '<a href="xoahanghoa.php?id='.$row['id'].'"> Xóa | </a>';
                  echo '<a href="suasanpham.php?id='.$row['id'].'"> Sửa </a>';
                }
              }
            echo '</div>';
          echo '</div>';
          echo "<br>";
        echo '</div>';
        }
      ?>
		</div>
	</div>
	</body>
	</html>