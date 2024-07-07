<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<?php include 'title.php';?>


	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">
	<style >
 
.modal{
	width: 100%;
	height: 100%;
	margin: 0 auto;
	top: 0;

}
.modal_bg{
	background: rgb(0, 0, 0, 0.6);
	height: 100%;
	width: 100%;
	margin: 0 auto;
	top: 0;

}
.mymodal-body{
  margin-bottom: 50%;
  margin-top: 5%;
  margin-left: 5%;

}
.modal_main{
	margin: 0 auto;
	width: 32%;
	height: 490px;
	background-color: lightblue;
	border-radius: 6px;
   position: fixed;
	top: 10%;
	left: 35%;
	z-index: 1;
	
}
.size{
	width: 50px;
	height: 50px;
}
.updatedisplay{
	width: 100px;
	height: 70px;
	margin-left: 160px;
}
.updatedisplay2{
	width: 100px;
	height: 70px;
	margin-left: 160px;
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
	width: 100%;
  }
}
.close{
	position: absolute;
	top: 2%;
	left:  88%;
	cursor: pointer;
}

.foo1{
    max-width: 5px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
	</style>
</head>

<body class="animsition">

	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		
		<!-- END HEADER MOBILE-->

		<!-- MENU SIDEBAR-->
			<?php include 'nav.php';?>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
		<?php include 'header.php';?>   
			<!-- HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30" style="left: -10px" >
					<div class="container-fluid">
						<div class="overview-wrap">
						<h2 class="title-1">Appointments</h2>
						<h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
						<div style="padding-left: 800px; position: absolute">
							<button onclick="decline()" class="btn btn-danger" style="color: white">Decline Schedule</button>
						</div>
						</div>
					<h3 style= "color:#e5e5e5">.</h3>
						<div class="row" style="left: -10px">
							<div class="col-lg-9" style="left: -10px">
								<div class="table-responsive table--no-card m-b-30" style="width: 1000px;max-height: 400px;">
									<table class="table table-borderless table-striped table-earning" style="width: 1000px">
										<thead>
									
											<tr>
												<th width="1%"><input type="checkbox" onClick="toggle(this)" required> Select all</th>
												<th width="5%">ID</th>
												<th width="10%">Date</th>
												<th width="10%">Time</th>
												<th width="20%">Name</th>
											</tr>
										</thead>
										<tbody id="tablebody" class="tablebody">
										</tbody>
								   </table>
								</div>
							</div>
							<div id="myModal" class="modal1">
								<span class="close">&times;</span>
								<img class="modal-content" id="img01">
								<div id="caption"></div>
							</div>
						<div class="row">
							<div class="col-md-12">
								<div class="copyright">
									<p style="padding-left: 350px">Copyright © 2023 MRS. All rights reserved.  </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT-->
			<!-- END PAGE CONTAINER-->
		</div>

	</div>

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
	<div class="modal" id="modal">
		   <div class="modal_bg " id="modal_bg">
			   <div class="modal_main" id="modal_main">
				   <div class="modal-header" style="margin-bottom: 70px">
					<h3 style= "color: #007bff" style="margin-left: 315px;width: 100px;height:50px;position: absolute">ADD APPOINTMENT</h3>
					<span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue">&times;</button></span>
				</div>
			<div class="mymodal-body">
				
				<form class="form" style="color: black" action="" method="POST">
					DATE: <input type="Date" id="date" style="position: absolute;margin-left: 50px" required><br><br>
					TIME: <input type="Time" id="time" style="position: absolute;margin-left: 53px" required><br><br>
					NAME: <input type="text" id="name" style="position: absolute;margin-left: 44px" required><br><br>
									<input type="text" class="ss" id="ss" style="position: absolute;margin-left: 44px" required >
					 <button style="margin-left: 35%;width: 100px;height:50px;position: absolute;" class="btn btn-primary" onclick="add_data()">ADD</button>

				</form>
			</div>
			
			</div>
			
		</div>
	</div>
	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
	 https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
	apiKey: "AIzaSyAcA8u0hL4KKhGjDRJEnEm1jhHUAfcTsaE",
	authDomain: "tsisdb.firebaseapp.com",
	databaseURL: "https://tsisdb.firebaseio.com",
	projectId: "tsisdb",
	storageBucket: "tsisdb.appspot.com",
	messagingSenderId: "117101059158",
	appId: "1:117101059158:web:0676e4596c5ed5dcfd2ff7"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script>
firebase.auth().onAuthStateChanged(function(user) {
  if (!user) {
    // No user signed in.
      window.location.replace("index.php");
  }
  });
	firebase.database().ref().child('appointment').orderByChild("status").equalTo("active").on("child_added", snap =>{
			var Id = snap.child("id").val();
			var Scheddate = snap.child("date").val();
			var Time = snap.child("time").val();
			var Name = snap.child("name").val();

			var cb="checkbox";
			var tog="foo";
			var tog1="foo1";
			var time1 = "time";
			var name1 = "name1";
			var date1 = "date1";
			$("#tablebody").append("<tr><td><input type="+cb+" class="+tog+" value="+Id+" required></td><td class="+tog1+">"+ Id +"</td><td class="+date1+">"+ Scheddate +"</td><td class="+time1+">"+ Time +"</td><td class="+name1+">"+ Name +"</td></tr>"); 
			var rowCount = $('#tablebody >tr').length;
			document.getElementById("myspan").innerHTML=rowCount;
			});
$('#add').click(function(){
  $('#modal').fadeIn();
  $('#modal_main').show();
	$('#ss').hide();
	document.getElementById("updatedisplay2").src = " ";
});
</script>
<script src="index.js"></script>
<script>
var checkboxes, checkedValue;
function toggle(source){
  checkboxes = document.getElementsByClassName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
	checkboxes[i].checked = source.checked;
  }
}
function decline(){
	var checkboxes2 = document.getElementsByClassName('foo');
     var checkedCount = 0;
     for(var i=0, n=checkboxes2.length;i<n;i++) {
     if(checkboxes2[i].checked){
        checkedValue = checkboxes2[i].value;
        checkedCount++;
                }
            }
    if (checkedCount > 0) {
     if (confirm("Are you sure you want to decline this schedule(s)?")) {
	 checkboxes = document.getElementsByClassName('foo');
	 for(var i=0, n=checkboxes.length;i<n;i++) {
	 if(checkboxes[i].checked){
		checkedValue = checkboxes[i].value;
		firebase.database().ref("appointment").child(checkedValue).update({
              status: "declined"
            });
	  }
	}
	firebase.database().ref("appointment").child(checkedValue).update({
              status: "declined"
            }).then(() => {
				alert("Declined Successfully!");
				window.location.replace("admin2.php");
        });
		}
    }else {
    alert("No data selected!");
  }   
  }
function logout(){
	firebase.auth().signOut().then(() =>{
		window.location.replace("index.php");
	});
}

  
</script>
<script>
// Get the modal
var modal1 = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modal1.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal1.style.display = "none";
}
</script>
</body>

</html>
<!-- end document-->
