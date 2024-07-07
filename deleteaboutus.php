<?php 
	$connect = mysqli_connect("localhost","root","","coresesdb");
	$id = $_GET['delete'];
	$query = mysqli_query($connect,"DELETE FROM `aboutusdb` WHERE `id` = '$id' ");

	if($query){
		echo "<script>alert('Delete Successfully');</script>";
   		header("Location:aboutus.php");
	}else{
		echo "Failed";
	}
?>