<?php
	include("menu.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			font-family: 'Playfair Display', serif; 
		}
	</style>
</head>
<body>

	<hr style="background-color:#86b817;">
  <!-- <form action="timkiem.php" method="GET" >
    <div>
    <select name="gia">
      <option value="40">Dưới 40$</option>
      <option value="55"> Dưới 55$</option>
      <option value="150"> Dưới 150$</option>
    </select>
    <input type="submit" name="search" value="Tìm Kiếm">
    </div>
  </form>    -->
<?php //dm ong hoi thi boc ucc :v nói em tham khảo dau r ?>
	<div class="container">
  		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   		 <ol class="carousel-indicators" >
    	  <li data-target="#myCarousel" data-slide-to="0" class="active" ></li>
    	  <li data-target="#myCarousel" data-slide-to="1"></li>
   		 </ol>
    <!-- Wrapper for slides -->
  			<div class="carousel-inner">
   	   			<div class="item active">
        			<img src="anh/slide1.jpg">
      			</div>
  				<div class="item">
        			<img src="anh/slide2.jpg" > 
      			</div>
    		</div>
  		</div>
	</div>
	<h3 style="text-align: center;">WELCOME TO ABC HOTEL</h3>
  <a name="datphong">
	<div class="container">
		<div class="row">
			<?php
        $conn = mysqli_connect("localhost","root","","doan2");    
        $sql = "SELECT * FROM phong";
        $kq= mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($kq)){
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
</a>
  <hr>
  <br><br>
  <a name="nhahang">
	<div class="container" style="font-size: 20px;">
		<div class="row">
			<div class="col-sm-4">TIN TỨC - NEWS
        <br><br>
				<div>
					<?php
						$sql = "SELECT * FROM tintuc";
						$kq = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($kq)) {
							echo '<a href ="tintuc.php?id='.$row['id'].'">'.$row['ten'].'</a>';
							echo "<hr><br>";
						}
					?>
				</div>
			</div>
  </a>
			<div class="col-sm-8">
				ẢNH ĐẸP ĐÀ NẴNG - PICTURES DA NANG
				<div>
					<img id="img" src="anh/img1.jpg">
				</div>
			</div>
		</div>
	</div>
  <br>
  <br>
</body>
</html>
<script type="text/javascript">
  var index = 1;  
  changeImg = function(){
    var imgs = ["anh/img1.jpg","anh/img2.jpg","anh/img3.jpg","anh/img4.jpg"];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == 4){
      index = 0;
    }
  }
  setInterval(changeImg,10000);
</script>