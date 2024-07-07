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
textarea {
    overflow-y: scroll;
    resize: none; /* Remove this if you want the user to resize the textarea */
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
                        <h2 class="title-1">News & Events</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 580px">
                            <a href=""><button onclick="deletedata()" class="btn btn-danger" style="color: white">Delete Article</button></a>
                        </div>
                    </div>
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px; max-height: 400px;">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th width="5%"><input type="checkbox" onClick="toggle(this)"/> Select all</th>
                                                <th>Picture</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>When</th>
                                                <th>Where</th>
                                                <th>Article</th>
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
    <script type="text/javascript">
    	$('#add').click(function(){
	$('#modal').fadeIn();
	$('#modal_main').show();
    $('#ss').hide();
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
    var imageToken, imageSrc;
    firebase.database().ref().child('newsandevents').on("child_added", snap =>{
    var Id = snap.child("id").val();
    var Article = snap.child("article").val();
        imageToken = snap.child("picture").val();
    var Title = snap.child("title").val();
    var Author = snap.child("author").val();
    var When = snap.child("when").val();
    var Where = snap.child("where").val();

    var cb="checkbox";
    var togImg = "togImg";
    var tog1="foo1";
    var sizerow = "4";
    var sizecol = "40";
    var sizerowtitle = "3";
    var sizecoltitle = "30";
    var tog="foo";
    var size = "size";
    var Image = "Image";
    var myimage = "myImg";

      var newRow = $("<tr>");
  newRow.append("<td><input type="+cb+" class="+tog+" value="+Id+"></td>");
  newRow.append("<td><img id="+myimage+" class="+size+" src="+ imageToken +" alt="+Image+"></td>");
  newRow.append("<td><textarea rows="+sizerowtitle+" cols="+sizecoltitle+" readonly>"+ Title +"</textarea></td>");
  newRow.append("<td>"+ Author +"</td>");
  newRow.append("<td>"+ When +"</td>");
  newRow.append("<td>"+ Where +"</td>");
  newRow.append("<td><textarea rows="+sizerow+" cols="+sizecol+" readonly>"+ Article +"</textarea></td>");

  $("#tablebody").append(newRow); 
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
     var checkboxes2 = document.getElementsByClassName('foo');
     var checkedCount = 0;
     for(var i=0, n=checkboxes2.length;i<n;i++) {
     if(checkboxes2[i].checked){
        checkedValue = checkboxes2[i].value;
        checkedCount++;
                }
            }
    if (checkedCount > 0) {
     if (confirm("Are you sure you want to delete this?")) {
        checkboxes = document.getElementsByClassName('foo');
     for(var i=0, n=checkboxes.length;i<n;i++) {
     if(checkboxes[i].checked){
         var imageSrc = $(checkboxes[i]).closest("tr").find(".size").attr("src");
        checkedValue = checkboxes[i].value;
        firebase.database().ref("newsandevents").child(checkedValue).remove();
            var storageRef = firebase.storage().ref();
            let name = imageSrc.substr(imageSrc.indexOf('%2F') + 3, (imageSrc.indexOf('?')) - (imageSrc.indexOf('%2F') + 3));
            name = name.replace('%20',' ');
            storageRef.child('newsandevents/'+ name).delete().then(function() {
                console.log("Deleted successfully!");
                window.location.replace("news2.php");
            })
            .catch(function() {
                alert("Unable to delete image!!!");
                window.location.replace("news2.php");
            });    
          }
        }
        firebase.database().ref("newsandevents").child(checkedValue).remove().then(() => {
              alert("Removed successfully!!!");
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
</body>

</html>
<!-- end document-->
