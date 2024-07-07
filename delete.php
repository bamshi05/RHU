<?php 
	$connect = mysqli_connect("localhost","root","","coresesdb");
	$id = $_GET['delete'];
	$query = mysqli_query($connect,"DELETE FROM `appointmentdb` WHERE `id` = '$id' ");

	if($query){
		echo "<script>alert('Delete Successfully');</script>";
   		header("Location:admin.php");
	}else{
		echo "Failed";
	}
?>