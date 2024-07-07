<?php 
	if(isset($_POST['submit'])){ 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$databaseName = "curry";
		

	
            
             $image=$_POST['image'];
			$price = $_POST['price'];
			$room = $_POST['productname'];
		
	
	    $connect = mysqli_connect($servername, $username, $password, $databaseName);
	    $query = "INSERT INTO `productdb`( `image`, `price`, `productname`) VALUES (`$image`,'$price','$productname')";
	
	
	$result = mysqli_query($connect,$query);

	
	if($result){
		echo "<h2>Data inserted</h2>";
	}else{
		echo "<h2>The data is already inserted </h2>";

}
}
?>