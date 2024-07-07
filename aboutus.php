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
    width: 40%;
    height: 180px;
    margin-left: 190px;
}
.mymodal-body{
  margin-bottom: 50%;
  margin-top: 5%;
  margin-left: 5%;

}
.modal_main{
    margin: 0 auto;
    width: 50%;
    height: 570px;
    background-color: lightblue;
    border-radius: 6px;
    position: fixed;
    top: 3%;
    left: 27%;
    z-index: 1;
    
}
.foo{
    max-width: 150px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.size{
    width: 400px;
    height: 300px;
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
.picture-canvas{
    max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
  .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    color: #333;
    border-radius: 4px;
    background-color: #f2f2f2;
  }

  /* Hide the default file picker */
  #file-upload {
    display: none;
  }
    .file-upload-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .foo{
    max-width: 50px;
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
                        <h2 class="title-1">About Us</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 735px; position: absolute">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus" ></i>Add Story</button>
                            <button name="update" id="update"><a href="#" class="btn btn-success">Update Story</a></button>
                            <button name="delete" id="delete" onclick="delete_data()"><a href=""  class="btn btn-danger">Delete Story</a></button>
                        </div>
                       </div> 
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px">
                                    <table class="table table-borderless table-striped table-earning" style="width: 1000px">
                                        <thead>
                                            <tr>
                                                <th width="15%">ID</th>
                                                <th>Picture</th>
                                                <th>Story</th>
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
                    <h3 style= "color: #007bff" style="margin-left: 315px;width: 100px;height:50px;position: absolute;">ARTICLE</h3>
                    <span onclick="document.getElementById('modal').style.display='none'" class="close" href="#"><button style="color: blue">&times;</button></span>
                </div>
            <div class="modal-body">
                <form class="form" style="color: black" action="" method="POST">
                    <img id="updatedisplay2" class="updatedisplay2"><br>
                    <div class="file-upload-wrapper">
                    <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Choose Image
                  </label>
                  <input id="file-upload" type="file" name="file" /><br><br>
                  </div>
                    ARTICLE: <textarea type="text"  name="article" id="article" class="form-control " cols="30" rows="6"></textarea>
                    <button style="margin-left: 41%;width: 100px;height:50px; top: 450px;position: absolute;" id="add_button" class="btn btn-primary" onclick="add_data()">Add Story</button>
                    <button style="margin-left: 39%;width: 100px;height:50px; top: 450px;position: absolute;" name="update_button" id="update_button" onclick="update_data()"><a href="#" class="btn btn-success">Update Story</a></button>
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
    var imageToken, Article,Id;
      document.getElementById("add").style.display = "inline-block";
      document.getElementById("add").disabled = false;
      document.getElementById("update").style.display = "none";
      document.getElementById("update").disabled = true;

     firebase.database().ref().child('aboutus').on("child_added", snap =>{                                           
     Id = snap.child("id").val();
     imageToken = snap.child("picture").val();                                           
     Article = snap.child("article").val();

     var sizerow = "12";
     var sizecol = "40";
     var size = "size";
    var Image = "Image";
    var myimage = "myImg";
    var tog="foo";
     $("#tablebody").append("<tr><td class="+tog+">"+ Id +"</td><td><img id="+myimage+" class="+size+" src="+ imageToken +" alt = "+Image+"></td><td><textarea rows="+sizerow+" cols="+sizecol+" readonly>"+ Article +"</textarea></td></tr>"); 

     var rowCount = $('#tablebody >tr').length;
     document.getElementById("myspan").innerHTML=rowCount;  
     if (rowCount > 0) {
        document.getElementById("update").style.display = "inline-block";
        document.getElementById("update").disabled = false;
        document.getElementById("add").style.display = "none";
        document.getElementById("add").disabled = true;
     }                                     
     });
     $('#add').click(function(){
    $('#modal').fadeIn();
    $('#modal_main').show();

      document.getElementById("add_button").style.display = "inline-block";
      document.getElementById("add_button").disabled = false;
      document.getElementById("update_button").style.display = "none";
      document.getElementById("update_button").disabled = true;
    });

     $('#update').click(function(){
    $('#modal').fadeIn();
    $('#modal_main').show();

      document.getElementById("add_button").style.display = "none";
      document.getElementById("add_button").disabled = true;
      document.getElementById("update_button").style.display = "inline-block";
      document.getElementById("update_button").disabled = false;

      document.getElementById("article").value = Article;
      document.getElementById("updatedisplay2").src = imageToken;

    });

    $('.close').click(function(){
        $('#modal').fadeOut();
        $('#modal_main').fadeOut();
    });

var selectedFile;
    $("#file-upload").on("change", function(event){
    selectedFile = event.target.files[0];
    var oFReader = new FileReader();
        oFReader.readAsDataURL(event.target.files[0]);

        oFReader.onload = function (oFREvent) {
        document.getElementById("updatedisplay2").src = oFREvent.target.result;
        };
    }); 
var filename;
function add_data(){
    filename = selectedFile.name;
    var storageRef = firebase.storage().ref('aboutus/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    var articleval = document.getElementById("article").value;
    document.getElementById("add_button").disabled = true;

        if(articleval == ""){
        alert("Please fill all required information!");
        document.getElementById("add_button").disabled = false;
        return;
        }

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

            var pushedRef = firebase.database().ref().child('aboutus/').push({
              article: articleval,
              picture: image_url
            });

            var a = pushedRef.key ;
            firebase.database().ref().child('aboutus/'+ a).set({
              id: a,
              article: articleval,
              picture: image_url
            }).then(() =>{
               // print the image url  
               alert("Added successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("add_button").disabled = false;
            });
            }); 
        });
        }
function update_data(){
    const fileInput = document.getElementById('file-upload');
    if (fileInput.files.length <= 0) {

    var articleval = document.getElementById("article").value;
    document.getElementById("add_button").disabled = true;

        if(articleval == ""){
        alert("Please fill all required information!");
        document.getElementById("add_button").disabled = false;
        return;
        }
            var pushedRef = firebase.database().ref().child('aboutus/'+ Id).update({
              article: articleval
            }).then(() =>{
               // print the image url  
               alert("Updated successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("add_button").disabled = false;
            });
    }else{
        filename = selectedFile.name;
    var storageRef = firebase.storage().ref();
        let name = imageToken.substr(imageToken.indexOf('%2F') + 3, (imageToken.indexOf('?')) - (imageToken.indexOf('%2F') + 3));
        name = name.replace('%20',' ');
        storageRef.child('aboutus/'+name).delete().then(function() {
            console.log("deleted successfully!");
        })
        .catch(function() {
            console.log("Unable to delete image!!!");
        });
    var storageRef = firebase.storage().ref('aboutus/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    var articleval = document.getElementById("article").value;
    document.getElementById("add_button").disabled = true;

        if(articleval == ""){
        alert("Please fill all required information!");
        document.getElementById("add_button").disabled = false;
        return;
        }

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

            var pushedRef = firebase.database().ref().child('aboutus/'+ Id).update({
              article: articleval,
              picture: image_url
            }).then(() =>{
               // print the image url  
               alert("Updated successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("add_button").disabled = false;
            });
            }); 
        });
    }
}

function delete_data(){

    if (confirm("Are you sure you want to delete this?")) {
        var storageRef = firebase.storage().ref();
        let name = imageToken.substr(imageToken.indexOf('%2F') + 3, (imageToken.indexOf('?')) - (imageToken.indexOf('%2F') + 3));
        name = name.replace('%20',' ');
        storageRef.child('aboutus/'+name).delete().then(function() {
            console.log("deleted successfully!");
        })
        .catch(function() {
            console.log("Unable to delete image!!!");
        });
        firebase.database().ref("aboutus/"+ Id).remove().then(() => {
              alert("Removed successfully!!!");
        }).catch(function() {
            alert("Failed to remove data! Please try again!");
        });
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
