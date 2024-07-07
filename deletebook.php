<?php 
	$connect = mysqli_connect("localhost","root","","curry");
	$id = $_GET['delete'];
	$query = mysqli_query($connect,"DELETE FROM `costumer` WHERE `id` = '$id' ");

	if($query){
		echo "<script>alert('Delete Successfully');</script>";
   		header("Location:table3.php");
	}else{
		echo "Failed";
	}
?>