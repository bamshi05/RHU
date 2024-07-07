<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
	* {
            margin: 0;
            padding: 0;
    	}
	.booking{
		background-color: black;
		opacity: 0.8;
		border-radius: 20px;
		width: 70%;
		height: 300px;
		margin-left: 100px;
		margin-top: 50px;
	}
	 body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("hotel5.jpeg");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            -webkit-filter: blur(3px);
            -moz-filter: blur(3px);
            -o-filter: blur(3px);
            -ms-filter: blur(3px);
            filter: blur(3px);
}
  .addbutton{
  	margin-top: 25px;
  	margin-left: 300px;
  	width: 150px;
  	height: 50px;
  	background-color: black;
  	color:white;
  	cursor: pointer;
  }
  form{
  	color:gold;
  	padding: 5px;
  	margin: 5px;
  }
  .yourroom{
  	margin-top: 50px;
  	width: 70%;
  	height: 15%;
  	margin-left: 100px;
  }

  #custom-button {
  padding: 10px;
  color: white;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 5px;
  cursor: pointer;
}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  margin-left: 10px;
  font-family: sans-serif;
  color: #aaa;
}
.modal{
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;

}
.modal_bg{
	background: rgba(0, 0, 0, 0.6);
	height: 100%;
	width: 100%;
	position: fixed;
	top: 0;

}
.modal_main{
	position: fixed;
	width: 50%;
	height: 470px;
	background: #fff;
	 border-radius: 6px;
	 top: 9%;
	 left: 24%;
	 z-index: 1;
	
}

.close{
	position: absolute;
	top: 3%;
	left:  95%;
	cursor: pointer;
}
.btn{
	border:1px solid black;
	background-color: white;
	color: black;
	padding: 5px 5px;
	font-size: 16px;
	cursor: pointer;
}
.success:hover{
	background-color: #4CAF50;
	color:white;
}
.danger:hover{
background-color: #f44336;
	color:white;

}
</style>

</head>
<body>
	<!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
    	$('#add').click(function(){
	$('#modal').fadeIn();
	$('#modal_main').show();
});
	$('.close').click(function(){
		$('#modal').fadeOut();
		$('#modal_main').fadeOut();
	});
    </script>

<div class="modal-body">
	<div class="modal" id="modal2">
		   <div class="modal_bg " id="modal_bg2">
			   <div class="modal_main" id="modal_main2">
				   <div class="modal-header" style="margin-bottom: 70px">
					<span class="close"><a href="admin.php" style="text-decoration: none">&times;</a></span>
				</div>
				
				<form style="color: black" action="" method="GET">
					ID<input type="id" name="id" style="margin-left: 125px;height: 25px" value="<?php echo $_GET['id'];?>"><br><br>
					<h4 style="margin-left: 400px">IMAGE</h4><input type="file" name="image" style="position: absolute;margin-left: 350px" required value="<?php echo  $_GET['image'];?>"><br><br><br>
					PRICE <input type="text" name="price" style="position: absolute;margin-left:90px" required value="<?php  echo $_GET['price'];?>"><br><br>
					PRODUCT <input type="text" name="productname" style="position: absolute;margin-left: 88px" required value="<?php echo  $_GET['productname'];?>"><br><br>

					<input type="submit" name="update" value="UPDATE" style="margin-left: 315px;width: 100px;height:50px;position: absolute;" class="btn-success" onclick="return confirm('Are You sure You want to Update ?')">
				</form>
			</div>
			
			</div>
			
		</div>
	</div>

</body>

</html>