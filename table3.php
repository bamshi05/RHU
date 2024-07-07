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
:root
{
  --text: "Select";
}
.multiple_select
{
  height: 38px;
  width: 100%;
  overflow: hidden;
  -webkit-appearance: menulist;
  position: relative;
}
.multiple_select::before
{
  content: var(--text);
  display: block;
}
.multiple_select_active
{
  height: 150px;
    overflow-y: scroll;
}
.multiple_select option
{
  display: none;
    height: 18px;
  background-color: white;
}
.multiple_select_active option
{
  display: block;
}

.multiple_select option::before {
  content: "\2610";
}
.multiple_select option:checked::before {
  content: "\2611";
}
.multiple_selectmed
{
  --text: "Select";
  height: 38px;
  width: 100%;
  overflow: hidden;
  -webkit-appearance: menulist;
  position: relative;
}
.multiple_selectmed::before
{
  content: var(--text);
  display: block;
}
.multiple_select_activemed
{
  height: 150px;
    overflow-y: scroll;
}
.multiple_selectmed option
{
  display: none;
    height: 18px;
  background-color: white;
}
.multiple_select_activemed option
{
  display: block;
}

.multiple_selectmed option::before {
  content: "\2610";
}
.multiple_selectmed option:checked::before {
  content: "\2611";
}

.dropdownform
{
  overflow: hidden;
  -webkit-appearance: menulist;
  position: relative;
}
.modal{
    width: 100%;
    height: 100%;
    position: fixed;
}
textarea {
    overflow-y: scroll;
    resize: none; /* Remove this if you want the user to resize the textarea */
}
.modal_bg{
    background: rgb(0, 0, 0, 0.6);
    height: 100%;
    width: 100%;
    position: fixed;
    top: 0;

}
.updatedisplay2{
    width: 25%;
    height: 105px;
    margin-left: 240px;
}
.mymodal-body{
  margin-bottom: 50%;
  margin-top: 5%;
  margin-left: 5%;

}
.modal_main{
    margin: 0 auto;
    width: 70%;
    height: 570px;
    background-color: lightblue;
    border-radius: 6px;
    position: fixed;
    top: 50%; /* Set the top position to 50% of the viewport height */
    left: 50%; /* Set the left position to 50% of the viewport width */
    transform: translate(-50%, -50%); /* Use transform to center the modal */
    z-index: 1;
    
}
.foo{
    max-width: 150px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.size{
    width: 50px;
    height: 50px;
    overflow: hidden;
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
input[type="text"], input[type="number"]{
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
                        <h2 class="title-1">Patient Records</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 690px; position: absolute">
                            <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus"></i> Add Record</button>
                            <button name="delete"><a href="table3del.php"  class="btn btn-danger">Delete Record</a></button>
                        </div>
                       </div>
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px; max-height: 400px;">
                                    <table class="table table-borderless table-striped table-earning" style="width: 1000px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Phone No.</th>
                                                <th>Email</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Blood Pressure</th>
                                                <th>Blood Type</th>
                                                <th>Civil Status</th>
                                                <th>Parent/Guardian/Spouse</th>
                                                <th>Past Medical Condition</th>
                                                <th>Medicine Taken (last 3 mos.)</th>
                                                <th>Current Medical Diagnosis</th>
                                                <th>Medicine Prescribed</th>
                                                <th>Additional Information</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tablebody">
                                        </tbody>
                                    </table>
                                </div>
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
                   <div class="modal-header">
                    <h3 style= "color: #007bff">RECORD FORM</h3>
                    <span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue">&times;</button></span>
                </div>
            <div class="modal-body">
                <form class="form" style="color: black" action="" method="POST">
                      <div class="row">
                        <div class="col">
                          <label for="name">Name:</label>
                          <input type="text" id="name" name="name" required>
                        </div>
                        <div class="col">
                          <label for="address">Address:</label>
                          <input type="text" id="address" name="address" required>
                        </div>
                        <div class="col">
                          <label for="phoneno">Phone No.:</label>
                          <input type="number" id="phone" name="phone">
                        </div>
                        <div class="col">
                          <label for="email">Email:</label>
                          <input type="text" id="email" name="email">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="age">Age:</label>
                          <input type="number" id="age" name="age" required>
                        </div>
                        <div class="col">
                          <label for="gender">Gender:</label>
                          <select class="form-control dropdownform" id="gender" required>
                          <option value="Gender">Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="col">
                          <label for="height">Height:</label>
                          <input type="text" id="height" name="height">
                        </div>
                        <div class="col">
                          <label for="weight">Weight:</label>
                          <input type="text" id="weight" name="weight">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label for="parent">Blood Pressure:</label>
                          <input type="text" id="bloodpressure" name="bloodpressure" required>
                        </div>
                        <div class="col">
                          <label for="bloodtype">Blood Type:</label>
                          <select class="form-control dropdownform" id="bloodtype">
                          <option value="Select Type">Select Type</option>
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="O+">O+</option>
                          <option value="O-">O-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                        </select>
                        </div>
                        <div class="col">
                          <label for="civilstatus">Civil Status:</label>
                          <select class="form-control dropdownform" id="civilstatus" required>
                          <option value="Civil Status">Civil Status</option>
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          <option value="Widowed">Widowed</option>
                          <option value="Legally Separated">Legally Separated</option>
                        </select>
                        </div>
                        <div class="col">
                          <label for="parent">Parent/Guardian/Spouse:</label>
                          <input type="text" id="parentname" name="parentname">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col" style="margin-left: 0%;top: 300px;position: absolute;">
                            <label for="civilstatus">Addtional Information:</label>
                          <textarea id="additional" name="additional" class="form-control " cols="30" rows="3"></textarea>
                        </div>
                      </div>
                      <button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="add_button" class="btn btn-primary">Add</button>
                      <button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="update_button" class="btn-update">Update</button>
                      <button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="edit_button" class="btn-edit" onclick="edit_data()">Edit</button>
                      <div class="row">
                        <div class="col container">
                          <label for="medcon">Medical Condition:</label>
                          <select class="form-control multiple_select" id="medicalcondition" multiple required>
                          <option value="Fever">Fever</option>
                          <option value="Asthma">Asthma</option>
                          <option value="Pneumonia">Pneumonia</option>
                          <option value="Allergies">Allergies</option>
                          <option value="Conjunctivitis">Conjunctivitis</option>
                          <option value="Diarrhea">Diarrhea</option>
                          <option value="Headaches">Headaches</option>
                          <option value="Mononucleosis">Mononucleosis</option>
                          <option value="Stomach Aches">Stomach Aches</option>
                        </select>
                        </div>
                        <div class="col container">
                          <label for="medpres">Medicine Prescribed:</label>
                          <select class="form-control multiple_selectmed" id="medication" multiple required>
                          <option value="Ibuprofen">Ibuprofen</option>
                          <option value="Paracetamol">Paracetamol</option>
                          <option value="Albuterol">Albuterol</option>
                          <option value="Antibiotics">Antibiotics</option>
                          <option value="Cetirizine">Cetirizine</option>
                          <option value="Loratadine">Loratadine</option>
                          <option value="Loperamide">Loperamide</option>
                          <option value="Triptans">Triptans</option>
                          <option value="Omeprazole">Omeprazole</option>
                        </select>
                        </div>
                        </div>
                      </div>
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

$(".multiple_select").mousedown(function(e) {
    if (e.target.tagName == "OPTION") 
{
  return; //don't close dropdown if i select option
}
$(this).toggleClass('multiple_select_active'); //close dropdown if click inside <select> box
});
$(".multiple_select").on('blur', function(e) {
    $(this).removeClass('multiple_select_active'); //close dropdown if click outside <select>
});
  
$('.multiple_select option').mousedown(function(e) { //no ctrl to select multiple
    e.preventDefault(); 
    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
    $(this).parent().change(); //trigger change event
});
  var selected;
  $("#medicalcondition").on('change', function() {
      selected = $("#medicalcondition").val().toString().replaceAll(',', ', '); //here I get all options and convert to string
      var document_style = document.documentElement.style;
      if(selected !== "")
        document_style.setProperty('--text', "'Selected: "+selected+"'");
      else
        document_style.setProperty('--text', "'Select'");
  });

  if(selected !== ""){
      selected = $("#medicalcondition").val().toString().replaceAll(',', ', '); //here I get all options and convert to string
      var document_style = document.documentElement.style;
      if(selected !== ""){
        document_style.setProperty('--text', "'Selected: "+selected+"'");
      }
  }

  $(".multiple_selectmed").mousedown(function(e) {
    if (e.target.tagName == "OPTION") 
    {
      return; //don't close dropdown if i select option
    }
    $(this).toggleClass('multiple_select_activemed'); //close dropdown if click inside <select> box
});
$(".multiple_selectmed").on('blur', function(e) {
    $(this).removeClass('multiple_select_activemed'); //close dropdown if click outside <select>
});
  
$('.multiple_selectmed option').mousedown(function(e) { //no ctrl to select multiple
    e.preventDefault(); 
    $(this).prop('selected', $(this).prop('selected') ? false : true); //set selected options on click
    $(this).parent().change(); //trigger change event
});

  var selectedmed;
  $("#medication").on('change', function() {
      selectedmed = $("#medication").val().toString().replaceAll(',', ', '); //here I get all options and convert to string
      if(selectedmed !== "")
        document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Selected: "+selectedmed+"'");
      else
        document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Select'");
  });

  if(selectedmed !== ""){
      selectedmed = $("#medication").val().toString().replaceAll(',', ', '); //here I get all options and convert to string
      if(selectedmed !== ""){
        document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Selected: "+selectedmed+"'");
      }
  }

    var idsaved;
     firebase.database().ref('appointment').on("child_added", snap => {
  const appointment = snap.val();
  if (appointment.status !== "declined") {
            var Id = snap.child("id").val();
            var Name = snap.child("name").val();
            var Address = snap.child("address").val();
            var Phone = snap.child("phone").val();
            var Email = snap.child("email").val();
            var Age = snap.child("age").val();
            var Gender = snap.child("gender").val();
            var Height = snap.child("height").val();
            var Weight = snap.child("weight").val();
            var Bloodpressure = snap.child("bloodpressure").val();
            var Bloodtype = snap.child("bloodtype").val();
            var Civilstatus = snap.child("civilstatus").val();
            var Parentname = snap.child("parentname").val();
            var Medicalcondition = snap.child("medicalcondition").val();
            var Medication = snap.child("medication").val();
            var Currentmedicalcondition = snap.child("currentmedicalcondition").val();
            var Currentmedication = snap.child("currentmedication").val();
            var Additional = snap.child("additional").val();

            var tog="foo";
            var myimage = "myImg";

            var row = $("<tr><td class="+tog+">"+ Id +"</td><td>"+ Name +"</td><td>"+ Address +"</td><td>"+ Phone +"</td><td>"+ Email +"</td><td>"+ Age +"</td><td>"+ Gender +"</td><td>"+ Height +"</td><td>"+ Weight +"</td><td>"+ Bloodpressure +"</td><td>"+ Bloodtype +"</td><td>"+ Civilstatus +"</td><td>"+ Parentname +"</td><td>"+ Medicalcondition +"</td><td>"+ Medication +"</td><td>"+ Currentmedicalcondition +"</td><td>"+ Currentmedication +"</td><td>"+ Additional +"</td></tr>");

            row.click(function() {
                openModal(Id); 
                localStorage.setItem('toeditrecord', Id);
                idsaved = localStorage.getItem("toeditrecord");

                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "none";
                document.getElementById("update_button").disabled = true;
                document.getElementById("edit_button").style.display = "inline-block";
                document.getElementById("edit_button").disabled = false;

                document.getElementById("name").value = Name;
                document.getElementById("address").value = Address;
                document.getElementById("phone").value = Phone;
                document.getElementById("email").value = Email;
                document.getElementById("age").value = Age;
                document.getElementById("gender").value = Gender;
                document.getElementById("height").value = Height;
                document.getElementById("weight").value = Weight;
                document.getElementById("bloodpressure").value = Bloodpressure;
                document.getElementById("bloodtype").value = Bloodtype;
                document.getElementById("civilstatus").value = Civilstatus;
                document.getElementById("parentname").value = Parentname;
                document.getElementById("medicalcondition").value = Currentmedicalcondition;
                document.getElementById("medication").value = Currentmedication;
                document.getElementById("additional").value = Additional;

                document.getElementById("name").readOnly = true;
                document.getElementById("address").readOnly = true;
                document.getElementById("phone").readOnly = true;
                document.getElementById("email").readOnly = true;
                document.getElementById("age").readOnly = true;
                document.getElementById("gender").disabled = true;
                document.getElementById("height").readOnly = true;
                document.getElementById("weight").readOnly = true;
                document.getElementById("bloodpressure").readOnly = true;
                document.getElementById("bloodtype").disabled = true;
                document.getElementById("civilstatus").disabled = true;
                document.getElementById("parentname").readOnly = true;
                document.getElementById("medicalcondition").disabled = true;
                document.getElementById("medication").disabled = true;
                document.getElementById("additional").readOnly = true;

                var document_style = document.documentElement.style;
                document_style.setProperty('--text', "'Select'");
                document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Select'");

                var values = snap.child("currentmedicalcondition").val();
                var dropdown = document.getElementById("medicalcondition");
                for (var i = 0; i < dropdown.options.length; i++) {
                  if (values.indexOf(dropdown.options[i].value) >= 0) {
                    dropdown.options[i].selected = true;
                    var document_style = document.documentElement.style;
                    document_style.setProperty('--text', "'Selected: "+values+"'");
                  }
                }

                var valuesmed = snap.child("currentmedication").val();
                var dropdownmed = document.getElementById("medication");
                for (var i = 0; i < dropdownmed.options.length; i++) {
                  if (valuesmed.indexOf(dropdownmed.options[i].value) >= 0) {
                    dropdownmed.options[i].selected = true;
                    document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Selected: "+valuesmed+"'");
                  }
                }
            });

            $("#tablebody").append(row);
            var rowCount = $('#tablebody >tr').length;
            document.getElementById("myspan").innerHTML=rowCount;
                }
            });

  $('#add').click(function(){
    $('#modal').fadeIn();
    $('#modal_main').show();
      document.getElementById("name").value = "";
      document.getElementById("address").value = "";
      document.getElementById("phone").value = "";
      document.getElementById("email").value = "";
      document.getElementById("age").value = "";
      document.getElementById("gender").value = "Gender";
      document.getElementById("height").value = "";
      document.getElementById("weight").value = "";
      document.getElementById("bloodpressure").value = "";
      document.getElementById("bloodtype").value = "Select Type";
      document.getElementById("civilstatus").value = "Civil Status";
      document.getElementById("parentname").value = "";
      document.getElementById("medicalcondition").value = [];
      document.getElementById("medication").value = [];
      document.getElementById("additional").value = "";

      document.getElementById("name").readOnly = false;
      document.getElementById("address").readOnly = false;
      document.getElementById("phone").readOnly = false;
      document.getElementById("email").readOnly = false;
      document.getElementById("age").readOnly = false;
      document.getElementById("gender").disabled = false;
      document.getElementById("height").readOnly = false;
      document.getElementById("weight").readOnly = false;
      document.getElementById("bloodpressure").readOnly = false;
      document.getElementById("bloodtype").disabled = false;
      document.getElementById("civilstatus").disabled = false;
      document.getElementById("parentname").readOnly = false;
      document.getElementById("medicalcondition").disabled = false;
      document.getElementById("medication").disabled = false;
      document.getElementById("additional").readOnly = false;

      document.getElementById("add_button").style.display = "inline-block";
      document.getElementById("add_button").disabled = false;
      document.getElementById("update_button").style.display = "none";
      document.getElementById("update_button").disabled = true;
      document.getElementById("edit_button").style.display = "none";
      document.getElementById("edit_button").disabled = true;

      var document_style = document.documentElement.style;
        document_style.setProperty('--text', "'Select'");
        document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Select'");
});
    $('.close').click(function(){
        $('#modal').fadeOut();
        $('#modal_main').fadeOut();
    });

function openModal(id) {
  $('#modal').fadeIn();
    $('#modal_main').show();
}

  var a, adate, atime, aname, Address, Phone, Email, Age, Gender, Height, Weight, Civilstatus, Parentname, Medicalcondition, Medication, Additional ;
  // Get the update button element
const addButton = document.getElementById("add_button");

// Add an event listener to the update button
addButton.addEventListener("click", function(event) {
  // Prevent the default behavior of the button
  event.preventDefault();
    var datenow = new Date();
    var yyyy = datenow.getFullYear();
    var mm = datenow.getMonth() + 1; // add 1 since getMonth() returns 0-11
    var dd = datenow.getDate();

    if (mm < 10) {
      mm = '0' + mm; // prepend 0 if month is less than 10
    }

    if (dd < 10) {
      dd = '0' + dd; // prepend 0 if date is less than 10
    }

    var Dateadded = yyyy + '/' + mm + '/' + dd;
    aname = document.getElementById("name").value;
    Address = document.getElementById("address").value;
    Phone = document.getElementById("phone").value;
    Email = document.getElementById("email").value;
    Age = document.getElementById("age").value;
    Gender = document.getElementById("gender").value;
    Height = document.getElementById("height").value;
    Weight = document.getElementById("weight").value;
    Bloodpressure = document.getElementById("bloodpressure").value;
    Bloodtype = document.getElementById("bloodtype").value;
    Civilstatus = document.getElementById("civilstatus").value;
    Parentname = document.getElementById("parentname").value;
    Currentmedicalcondition = document.getElementById("medicalcondition").value;
    Currentmedication = document.getElementById("medication").value;
    Additional = document.getElementById("additional").value;
    document.getElementById("add_button").disabled = true;

    if(aname == "" || Address == "" || Age == "" || Gender == "Gender" || Height == "" || Weight == "" || Bloodpressure == "" || Bloodtype == "Select Type" || Civilstatus == "Civil Status" || Currentmedicalcondition == "Select" || Currentmedication == "Select"){
    alert("Please fill all required information!");
    document.getElementById("add_button").disabled = false;
    return;
    }
  // Perform the update action
  var pushedRef = firebase.database().ref().child('appointment/').push({
          id: "",  
          dateadded: Dateadded,
          name: aname,
          address: Address,
          phone: Phone,
          email: Email,
          age: Age,
          gender: Gender,
          height: Height,
          weight: Weight,
          bloodpressure: Bloodpressure,
          bloodtype: Bloodtype,
          civilstatus: Civilstatus,
          parentname: Parentname,
          currentmedicalcondition: selected,
          currentmedication: selectedmed,
          status: "done",
          additional: Additional
  });
            a = pushedRef.key ;

            const dbRef = firebase.database().ref("appointment/" + a);
            dbRef.update({
              id: a
            }).then(() => {
              document.getElementById("name").value = "";
              document.getElementById("address").value = "";
              document.getElementById("phone").value = "";
              document.getElementById("email").value = "";
              document.getElementById("age").value = "";
              document.getElementById("gender").value = "Gender";
              document.getElementById("height").value = "";
              document.getElementById("weight").value = "";
              document.getElementById("bloodpressure").value = "";
              document.getElementById("bloodtype").value = "Select Type";
              document.getElementById("civilstatus").value = "Civil Status";
              document.getElementById("parentname").value = "";
              document.getElementById("medicalcondition").value = [];
              document.getElementById("medication").value = [];
              document.getElementById("additional").value = "";

              var document_style = document.documentElement.style;
            document_style.setProperty('--text', "'Select'");
            document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Select'");

              alert("Added successfully!!!");
              document.getElementById("add_button").disabled = false;
  });
});

function edit_data(){
                document.getElementById("name").readOnly = false;
                document.getElementById("address").readOnly = false;
                document.getElementById("phone").readOnly = false;
                document.getElementById("email").readOnly = false;
                document.getElementById("age").readOnly = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("height").readOnly = false;
                document.getElementById("weight").readOnly = false;
                document.getElementById("bloodpressure").readOnly = false;
                document.getElementById("bloodtype").disabled = false;
                document.getElementById("civilstatus").disabled = false;
                document.getElementById("parentname").readOnly = false;
                document.getElementById("medicalcondition").disabled = false;
                document.getElementById("medication").disabled = false;
                document.getElementById("additional").readOnly = false;

                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "inline-block";
                document.getElementById("update_button").disabled = false;
                document.getElementById("edit_button").style.display = "none";
                document.getElementById("edit_button").disabled = true;
                Editbutton.style.backgroundColor = '#28a745';
}
    // Get the update button element
const updateButton = document.getElementById("update_button");

// Add an event listener to the update button
updateButton.addEventListener("click", function(event) {
  // Prevent the default behavior of the button
  event.preventDefault();
  var datenow = new Date();
            var yyyy = datenow.getFullYear();
            var mm = datenow.getMonth() + 1; // add 1 since getMonth() returns 0-11
            var dd = datenow.getDate();

            if (mm < 10) {
              mm = '0' + mm; // prepend 0 if month is less than 10
            }

            if (dd < 10) {
              dd = '0' + dd; // prepend 0 if date is less than 10
            }

            var Dateadded = yyyy + '/' + mm + '/' + dd;
            aname = document.getElementById("name").value;
            Address = document.getElementById("address").value;
            Phone = document.getElementById("phone").value;
            Email = document.getElementById("email").value;
            Age = document.getElementById("age").value;
            Gender = document.getElementById("gender").value;
            Height = document.getElementById("height").value;
            Weight = document.getElementById("weight").value;
            Bloodpressure = document.getElementById("bloodpressure").value;
            Bloodtype = document.getElementById("bloodtype").value;
            Civilstatus = document.getElementById("civilstatus").value;
            Parentname = document.getElementById("parentname").value;
            Currentmedicalcondition = document.getElementById("medicalcondition").value;
            Currentmedication = document.getElementById("medication").value;
            Additional = document.getElementById("additional").value;
            document.getElementById("add_button").disabled = true;
            
            if(aname == "" || Address == "" || Age == "" || Gender == "Gender" || Height == "" || Weight == "" || Bloodpressure == "" || Bloodtype == "Select Type" || Civilstatus == "Civil Status" || Currentmedicalcondition == "Select" || Currentmedication == "Select"){
            alert("Please fill all required information!");
            document.getElementById("update_button").disabled = false;
            return;
            }

  // Perform the update action
  firebase.database().ref().child('appointment/'+ idsaved).update({  
      dateadded: Dateadded,
      name: aname,
      address: Address,
      phone: Phone,
      email: Email,
      age: Age,
      gender: Gender,
      height: Height,
      weight: Weight,
      bloodpressure: Bloodpressure,
      bloodtype: Bloodtype,
      civilstatus: Civilstatus,
      parentname: Parentname,
      currentmedicalcondition: selected,
      currentmedication: selectedmed,
      status: "done",
      additional: Additional
  }).then(() => {
    alert("Updated successfully!!!");
    document.getElementById("name").readOnly = true;
    document.getElementById("address").readOnly = true;
    document.getElementById("phone").readOnly = true;
    document.getElementById("email").readOnly = true;
    document.getElementById("age").readOnly = true;
    document.getElementById("gender").disabled = true;
    document.getElementById("height").readOnly = true;
    document.getElementById("weight").readOnly = true;
    document.getElementById("bloodpressure").readOnly = true;
    document.getElementById("bloodtype").disabled = true;
    document.getElementById("civilstatus").disabled = true;
    document.getElementById("parentname").readOnly = true;
    document.getElementById("medicalcondition").disabled = true;
    document.getElementById("medication").disabled = true;
    document.getElementById("additional").readOnly = true;

  document.getElementById("update_button").style.display = "none";
  document.getElementById("edit_button").style.display = "inline-block";

    document.getElementById("add_button").style.display = "none";
    document.getElementById("add_button").disabled = true;
    document.getElementById("update_button").style.display = "none";
    document.getElementById("update_button").disabled = true;
    document.getElementById("edit_button").style.display = "inline-block";
    document.getElementById("edit_button").disabled = false;
  });
});                                     

     </script>

<script src="index.js"></script>
<script>
function logout(){
    firebase.auth().signOut().then(() =>{
        window.location.replace("index.php");
    });
}

  
</script>
</body>

</html>
<!-- end document-->
