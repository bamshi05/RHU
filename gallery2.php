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
    padding-top: 20%;
    width: 100%;
    height: 100%;
    top: 0;

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
.close{
    position: absolute;
    top: 2%;
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
                        <h2 class="title-1">Gallery</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 370px">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus" ></i>Add Gallery</button>
                        <a href="gallery3.php" class="btn btn-success"><button name="update" style="color: white">Update Gallery</button></a>
                        <button onclick="deletedata()" class="btn btn-danger" style="color: white">Delete Gallery</button>
                        </div>
                       </div> 
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px; max-height: 400px;">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th width="1%"><input type="checkbox" onClick="toggle(this)"/> Select all</th>
                                                <th width="1%">ID</th>
                                                <th>Pictures</th>
                                                <th width="50%">Description</th>
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
    $('#ss').hide();
});
    </script>

    <div class="modal" id="modal">
           <div class="modal_bg " id="modal_bg">
               <div class="modal_main" id="modal_main">
                   <div class="modal-header" style="margin-bottom: 70px">
                    <h3 style= "color: #007bff" style="margin-left: 315px;width: 100px;height:50px;position: absolute;">ADD GALLERY</h3>
                    <span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue">&times;</button></span>
                </div>
            <div class="modal-body">
                
                <form class="form" style="color: black" action="" method="POST">
                    <img id="updatedisplay2" class="updatedisplay2"><br>
                    PICTURE:<br><input type="file" name="picture" id="picture" required ><br>
                    DESCRIPTION: <textarea type="text"  name="description" id="description" class="form-control " cols="30" rows="4"></textarea><br>
                    <input type="text" class="ss" id="ss" style="position: absolute;margin-left: 44px" required >
                    <button style="margin-left: 37%;width: 100px;height:50px;position: absolute;" class="btn btn-primary" onclick="add_data()">ADD ITEM</button>
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
    firebase.database().ref().child('gallery').on("child_added", snap =>{
    var Id = snap.child("id").val();
    var Picture = snap.child("picture").val();
    var Description = snap.child("article").val();

    var cb="checkbox";
    var tog="foo";
    var sizerow = "8";
    var sizecol = "50";
    var togImg = "togImg";
    var tog="foo";
    var tog1="foo1";
    var size = "size";
    var Image = "Image";
    var myimage = "myImg";
    $("#tablebody").append("<tr><td><input type="+cb+" class="+tog+" value="+Id+"></td><td class="+tog1+">"+ Id +"</td><td class="+size+"><img id="+myimage+" class="+togImg+" src="+ Picture +" alt = "+Image+"></td><td><textarea rows="+sizerow+" cols="+sizecol+">"+ Description +"</textarea></td></tr>"); 
    var rowCount = $('#tablebody >tr').length;
    document.getElementById("myspan").innerHTML=rowCount;
    });
var selectedFile;
    $("#picture").on("change", function(event){
    selectedFile = event.target.files[0];
    var oFReader = new FileReader();
        oFReader.readAsDataURL(event.target.files[0]);

        oFReader.onload = function (oFREvent) {
        document.getElementById("updatedisplay2").src = oFREvent.target.result;
        };
    });
function add_data(){
    var filename = selectedFile.name;
    var storageRef = firebase.storage().ref('/galleryimages/' + filename);
    var uploadTask = storageRef.put(selectedFile);
    uploadTask.on('state_changed', function(snapshot){
          // Observe state change events such as progress, pause, and resume
          // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
          var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
          console.log('Upload is ' + progress + '% done');
          switch (snapshot.state) {
            case firebase.storage.TaskState.PAUSED: // or 'paused'
              console.log('Upload is paused');
              break;
            case firebase.storage.TaskState.RUNNING: // or 'running'
              console.log('Upload is running');
              break;
          }
        }, function(error) {
          // Handle unsuccessful uploads
        }, function() {
          // Handle successful uploads on complete
          // For instance, get the download URL: https://firebasestorage.googleapis.com/...
           uploadTask.snapshot.ref.getDownloadURL().then( 
                function(downloadURL) { 
  
               // You get your url from here 
                console.log('File available at', downloadURL); 

            var image_url =  downloadURL;
            var descripval = document.getElementById("description").value;
            var dataId = document.getElementsByClassName('foo1');
            var ids = [0];

            for (var i = 0; i < dataId.length; ++i) {
              ids.push(parseFloat(dataId[i].innerText.replace("€","")));
            }
            highest = Math.max.apply(Math,ids);
            console.log(highest);

            var a=highest+1;
            firebase.database().ref().child('gallery/'+ a).set({
              id: a,
              article: descripval,
              picture: image_url
            });
  
              // print the image url  
               alert("Added successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();

            }); 
        });
        }
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
        imageToken = checkboxes[i].parentNode.parentNode.querySelector(".togImg").src;
        checkedValue = checkboxes[i].value;
        firebase.database().ref("gallery").child(checkedValue).remove();
            var storageRef = firebase.storage().ref();
            let name = imageToken.substr(imageToken.indexOf('%2F') + 3, (imageToken.indexOf('?')) - (imageToken.indexOf('%2F') + 3));
            name = name.replace('%20',' ');
            storageRef.child('/galleryimages/'+name).delete().then(function() {
                console.log("deleted successfully!");
                window.location.replace("gallery2.php");
            })
            .catch(function() {
                alert("Unable to delete image!!!");
                window.location.replace("gallery2.php");
            });    
      }
    }
  }
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
