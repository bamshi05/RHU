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
	position: fixed;
	top: 0;

}
.modal_bg{
	background: rgb(0, 0, 0, 0.6);
	height: 100%;
	width: 100%;
	position: fixed;
	top: 0;

}
.updatedisplay2{
    width: 100px;
    height: 70px;
    margin-left: 160px;
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
.foo{
    max-width: 5px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
input[type="text"]{
  text-indent: 5px;
  text-overflow: ellipsis;
}
.btn-update {
  background-color: #28a745;
}
.btn-edit {
  background-color: #28a745;
}
button {
  color: white;
}
    </style>
</head>
<body class="animsition">
    <div class="page-wrapper">
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
                        <div style="padding-left: 650px; position: absolute">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus"></i> Add Schedule</button>
                            <a href="admin2.php" class="btn btn-danger"><button name="decline" style="color: white">Decline Schedule</button></a>
                        </div>
                        </div>
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px; max-height: 400px;">
                                    <table class="table table-borderless table-striped table-earning" id="appointmenttable">
                                        <thead>
                                    
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
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
                                    <p style="padding-left: 350px">Copyright © 2023 RHU BUENAVISTA. All rights reserved.  </p>
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
                    <h3 style= "color: #007bff" style="margin-left: 315px;width: 100px;height:50px;position: absolute">APPOINTMENT</h3>
          <span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue ">&times;</button></span>
        </div>
      <div class="mymodal-body">
        
        <form class="form" style="color: black" action="" method="POST">
                    DATE: <input type="Date" id="date" style="position: absolute;margin-left: 50px" required><br><br>
                    TIME: <input type="time" id="time" style="position: absolute; margin-left: 53px;" required><br><br>
                    NAME: <input type="text" id="name" style="position: absolute;margin-left: 44px" required><br><br>
                     <button style="margin-left: 35%;width: 100px;height:50px;position: absolute;" id="add_button" class="btn btn-primary" onclick="add_data()">ADD</button>
                     <button style="margin-left: 35%;width: 100px;height:50px;position: absolute;" id="update_button" class="btn-update" onclick="update_data()">Update</button>
                      <button style="margin-left: 35%;width: 100px;height:50px;position: absolute;" id="edit_button" class="btn-edit" onclick="edit_data()">Edit</button>

        </form>
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

var Updatebutton = document.getElementById("update_button");
Updatebutton.style.cursor = 'pointer';
Updatebutton.onmouseover = function() {
  Updatebutton.style.backgroundColor = '#38d55c';
}
Updatebutton.onmouseout = function() {
  Updatebutton.style.backgroundColor = '#28a745';
}

var Editbutton = document.getElementById("edit_button");
Editbutton.style.cursor = 'pointer';
Editbutton.onmouseover = function() {
  Editbutton.style.backgroundColor = '#38d55c';
}
Editbutton.onmouseout = function() {
  Editbutton.style.backgroundColor = '#28a745';
}

const timeInput = document.getElementById("time");

timeInput.addEventListener("input", function() {
  const selectedTime = this.value;
  const minTime = "08:00";
  const maxTime = "17:00";
  
  if (selectedTime < minTime || selectedTime > maxTime) {
    alert("Office hours is between 8:00 AM to 5:00 PM only.");
  } else {
    this.setCustomValidity("");
  }
});

const dateInput = document.getElementById("date");

// Set the minimum date to today's date
const today = new Date();
const yyyy = today.getFullYear();
const mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
const dd = String(today.getDate()).padStart(2, '0');
const minDate = yyyy + '-' + mm + '-' + dd;
dateInput.min = minDate;

// Set the maximum date to December 31, 2023
dateInput.max = "2023-12-31";
var idsaved;
    firebase.database().ref().child('appointment').orderByChild("status").equalTo("active").on("child_added", snap =>{
            var Id = snap.child("id").val();
            var Scheddate = snap.child("date").val();
            var Time = snap.child("time").val();
            var Name = snap.child("name").val();

            var tog="foo";
            var myimage = "myImg";
            var row = $("<tr><td class="+tog+">"+ Id +"</td><td>"+ Scheddate +"</td><td>"+ Time +"</td><td>"+ Name +"</td></tr>"); 
            row.click(function() {
                openModal(Id); 

                localStorage.setItem('toupdateappointment', Id);
                idsaved = localStorage.getItem("toupdateappointment");

                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "none";
                document.getElementById("update_button").disabled = true;
                document.getElementById("edit_button").style.display = "inline-block";
                document.getElementById("edit_button").disabled = false;

                document.getElementById("date").value = Scheddate;
                document.getElementById("time").value = Time;
                document.getElementById("name").value = Name;

                document.getElementById("date").readOnly = true;
                document.getElementById("time").readOnly = true;
                document.getElementById("name").readOnly = true;
            });

            $("#tablebody").append(row);

            var rowCount = $('#tablebody >tr').length;
            document.getElementById("myspan").innerHTML=rowCount;
            });
function openModal(id) {
  $('#modal').fadeIn();
    $('#modal_main').show();
}

  $('#add').click(function(){
    $('#modal').fadeIn();
    $('#modal_main').show();
      document.getElementById("date").value = "";
      document.getElementById("time").value = "";
      document.getElementById("name").value = "";

      document.getElementById("date").readOnly = false;
      document.getElementById("time").readOnly = false;
      document.getElementById("name").readOnly = false;

      document.getElementById("add_button").style.display = "inline-block";
      document.getElementById("add_button").disabled = false;
      document.getElementById("update_button").style.display = "none";
      document.getElementById("update_button").disabled = true;
      document.getElementById("edit_button").style.display = "none";
      document.getElementById("edit_button").disabled = true;
});

function edit_data(){
                document.getElementById("date").readOnly = false;
                document.getElementById("time").readOnly = false;
                document.getElementById("name").readOnly = false;

                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "inline-block";
                document.getElementById("update_button").disabled = false;
                document.getElementById("edit_button").style.display = "none";
                document.getElementById("edit_button").disabled = true;
                Editbutton.style.backgroundColor = '#28a745';
}

function update_data(){
    document.getElementById("update_button").disabled = true;
            var adate = document.getElementById("date").value;
            var atime = document.getElementById("time").value;
            var aname = document.getElementById("name").value;
        if(aname == "" || atime == "" || adate == ""){
            alert("Please fill all required information!");
            document.getElementById("add_button").disabled = false;
            return;
            }
            var pushedRef = firebase.database().ref().child('appointment/'+ idsaved).update({
              date: adate,
              time: atime,
              name: aname
            }).then(() =>{
               // print the image url  
               alert("Updated successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("update_button").disabled = false;
            });
}

function add_data(){

            var adate = document.getElementById("date").value;
            var atime = document.getElementById("time").value;
            var aname = document.getElementById("name").value;
            document.getElementById("add_button").disabled = true;
            
            if(aname == "" || atime == "" || adate == ""){
            alert("Please fill all required information!");
            document.getElementById("add_button").disabled = false;
            return;
            }

            var pushedRef = firebase.database().ref().child('appointment/').push({
              date: adate,
              time: atime,
              status: "active",
              name: aname
            });

            var a = pushedRef.key ;

            firebase.database().ref().child('appointment/'+ a).set({
              id: a,
              date: adate,
              time: atime,
              status: "active",
              name: aname
            }).then(() =>{
               alert("Added successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("add_button").disabled = false;
            });
        }
function logout(){
    firebase.auth().signOut().then(() =>{
        window.location.replace("index.php");
    });
}  
</script>
<script src="index.js"></script>
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
