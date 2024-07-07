<?php 
	$connect = mysqli_connect("localhost","root","","curry");
	$id = $_GET['delete'];
	$query = mysqli_query($connect,"DELETE FROM `gallerydb` WHERE `id` = '$id' ");

	if($query){
		echo "<script>alert('Delete Successfully');</script>";
   		header("Location:gallery.php");
	}else{
		echo "Failed";
	}
?>