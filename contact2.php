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
.modal_bg{
    background: rgb(0, 0, 0, 0.6);
    height: 100%;
    width: 100%;
    position: fixed;
    top: 0;

}
.modal_main{
    position: fixed;
    width: 50%;
    height: 570px;
    background-color: lightblue;
     border-radius: 6px;
     top: 9%;
     left: 24%;
     z-index: 1;
    
}

.
.close{
    position: absolute;
    top: 3%;
    left:  95%;
    cursor: pointer;
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
                        <h2 class="title-1">Contacts</h2>
                        <div style="padding-left: 350px">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus" ></i>Add Contact</button>
                            <button name="update"><a href="updatecontact.php" class="btn btn-success">Update Contact</a></button>
                            <button onclick="deletedata()"><a href="" class="btn btn-danger">Delete Contact</a></button>
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
                                                <th>ID</th>
                                                <th></th>
                                                <th>Number</th>
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
});
    $('.close').click(function(){
        $('#modal').fadeOut();
        $('#modal_main').fadeOut();
    });
    </script>

    <div class="modal" id="modal">
           <div class="modal_bg " id="modal_bg">
               <div class="modal_main" id="modal_main">
                   <div class="modal-header" style="margin-bottom: 70px">
                    <h3 style= "color: green" style="margin-left: 315px;width: 100px;height:50px;position: absolute;">ADD CONTACTS</h3>
                    <span class="close"><a href="contact.php" style="text-decoration: none">&times;</a></span>
                </div>
            <div class="modal-body">
                
                <form class="form" style="color: black" action="" method="POST">
                          <div class="row mb-4">
                <div class="col-md-12 form-group">
                  CONTACT <input type="number" name="number" style="position: absolute;margin-left: 44px" required ><br><br>
                </div>
              </div>

                    <input type="submit" name="submit" value="ADD ITEM" style="margin-left: 270px; width: 100px;height:50px;position: absolute;" class="btn-success" >


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
     firebase.database().ref().child('3/data').on("child_added", snap =>{                                           
     var Id = snap.child("id").val();                                           
     var Numb = snap.child("number").val();

     var cb="checkbox";
     var tog="foo";

     $("#tablebody").append("<tr><td><input type="+cb+" class="+tog+" value="+Id+"></td><td>"+ Id +"</td><td></td><td>"+ Numb +"</td></tr>");                                            
     });                                           
</script>                                                                               

<script src="index.js"></script>
<script>
function toggle(source){
  checkboxes = document.getElementsByClassName('foo');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
function deletedata(){
     checkboxes = document.getElementsByClassName('foo');
     for(var i=0, n=checkboxes.length;i<n;i++) {
     if(checkboxes[i].checked){
        checkedValue = checkboxes[i].value;
        firebase.database().ref("3/data").child(checkedValue).remove();
    } 
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
