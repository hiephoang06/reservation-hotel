<?php
	session_start();
?>
<?php
	$mess="";
	$conn = mysqli_connect("localhost", "root","","doan2");
	$noidung = $_POST["noidung"];
	$id = $_POST["id"];
	$user1 = $_SESSION['ten'];
	
	if($noidung==""){
		
	}
	
	else{
	$sql = "INSERT INTO binhluan (idks,noidung,ten) VALUES ($id, '$noidung' ,'$user1')";
	$ketqua= mysqli_query($conn,$sql);
	}
?>