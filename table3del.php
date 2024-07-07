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
.foo1{
    max-width: 150px;
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
                        <h2 class="title-1">Patient Records</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 830px; position: absolute">
                            <button onclick="deletedata()"><a href=""  class="btn btn-danger">Delete Record</a></button>
                        </div>
                       </div>
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px">
                                    <table class="table table-borderless table-striped table-earning" style="width: 1000px">
                                        <thead>
                                            <tr>
                                                <th width="5%"><input type="checkbox" onClick="toggle(this)"/> Select all</th>
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
     firebase.database().ref().child('appointment').on("child_added", snap =>{                                           
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

     var cb="checkbox";
     var tog="foo";
     var tog2="foo1";
     $("#tablebody").append("<tr><td><input type="+cb+" class="+tog+" value="+Id+"></td><td class="+tog2+">"+ Id +"</td><td>"+ Name +"</td><td>"+ Address +"</td><td>"+ Phone +"</td><td>"+ Email +"</td><td>"+ Age +"</td><td>"+ Gender +"</td><td>"+ Height +"</td><td>"+ Weight +"</td><td>"+ Bloodpressure +"</td><td>"+ Bloodtype +"</td><td>"+ Civilstatus +"</td><td>"+ Parentname +"</td><td>"+ Medicalcondition +"</td><td>"+ Medication +"</td><td>"+ Currentmedicalcondition +"</td><td>"+ Currentmedication +"</td><td>"+ Additional +"</td></tr>");   

            var rowCount = $('#tablebody >tr').length;
            document.getElementById("myspan").innerHTML=rowCount;                                         
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
function deletedata(){
     checkboxes = document.getElementsByClassName('foo');
     var checkedCount = 0;
     for(var i=0, n=checkboxes.length;i<n;i++) {
     if(checkboxes[i].checked){
        checkedValue = checkboxes[i].value;
        checkedCount++;
                }
            }
    if (checkedCount > 0) {
    if (confirm("Are you sure you want to delete this?")) {
        for(var i=0, n=checkboxes.length;i<n;i++) {
     if(checkboxes[i].checked){
        checkedValue = checkboxes[i].value;
        checkedCount++;
        firebase.database().ref("appointment").child(checkedValue).remove();
                }
            }
        firebase.database().ref("appointment").child(checkedValue).remove().then(() => {
              alert("Removed successfully!!!");
        });
    }
  } else {
    alert("No data selected!");
  }
}
function logout(){
    firebase.auth().signOut().then(() =>{
        window.location.replace("index.php");
    });
}

  
</script>
</body>

</html>
<!-- end document-->
