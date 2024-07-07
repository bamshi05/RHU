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
    padding-top: 20px;
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
#updatedisplay2{
    width: 240px;
    height: 158px;
    margin-left: 198px;
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
  input[type="text"], input[type="date"]{
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
                        <h2 class="title-1">News & Events</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 720px; position: absolute">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">
                            <i class="zmdi zmdi-plus" ></i>Add Article</button>
                            <a href="news2.php" class="btn btn-danger"><button name="delete" style="color: white">Delete Article</button></a>
                        </div>
                    </div>
                    <h3 style= "color:#e5e5e5">.</h3>
                        <div class="row" style="left: -10px">
                            <div class="col-lg-9" style="left: -10px">
                                <div class="table-responsive table--no-card m-b-30" style="width: 1000px; max-height: 400px;">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
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

    <div class="modal" id="modal">
		   <div class="modal_bg " id="modal_bg">
			   <div class="modal_main" id="modal_main">
				   <div class="modal-header">
                    <h3 style= "color: #007bff" style="margin-left: 315px;width: 100px;height:50px;position: absolute;">ARTICLE</h3>
					<span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue">&times;</button></span>
				</div>
			<div class="modal-body">
				<form class="form" style="color: black" action="" method="POST">
                    <div class="row">
                        <div class="col">
                        <img id="updatedisplay2" class="updatedisplay2" >
                     </div>
                    </div><br>
                    <div class="file-upload-wrapper">
                    <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Choose Image
                  </label>
                  <input id="file-upload" type="file" name="file">
                  </div>
                    <div class="row">
                        <div class="col">
                        <label for="title">Title:</label>
                        <input type="text" id="title" style="position: absolute;margin-left: 39px;width: 567px;" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="author">Author:</label>
                        <input type="text" id="author" style="position: absolute;margin-left: 18px;" required>
                        </div>
                        <div class="col">
                        <label for="date">Date:</label>
                        <input type="date" id="when" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="where">Where:</label>
                        <input type="text" id="where" style="position: absolute;margin-left: 20px;width: 567px;" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="article">Article:</label>
                        <textarea type="text"  name="article" id="article" class="form-control " cols="30" rows="2"></textarea>
                        </div>
                    </div>
					<button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="add_button" class="btn btn-primary" onclick="add_data()">Add</button>
                      <button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="update_button" class="btn-update" onclick="update_data()">Update</button>
                      <button style="margin-left: 41%;width: 100px;height:50px; top: 447px;position: absolute;" id="edit_button" class="btn-edit" onclick="edit_data()">Edit</button>
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
    
$('#add').click(function(){
    $('#modal').fadeIn();
    $('#modal_main').show();
    $('#ss').hide();
        document.getElementById("add_button").style.display = "inline-block";
        document.getElementById("add_button").disabled = false;
        document.getElementById("update_button").style.display = "none";
        document.getElementById("update_button").disabled = true;
        document.getElementById("edit_button").style.display = "none";
        document.getElementById("edit_button").disabled = true;
        document.getElementById("file-upload").disabled = false;

        document.getElementById("updatedisplay2").src = "";
        document.getElementById("title").value = "";
        document.getElementById("author").value = "";
        document.getElementById("when").value = "";
        document.getElementById("where").value = "";
        document.getElementById("article").value = "";

        document.getElementById("title").readOnly = false;
        document.getElementById("author").readOnly = false;
        document.getElementById("when").readOnly = false;
        document.getElementById("where").readOnly = false;
        document.getElementById("article").readOnly = false;
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
    var idsaved;
    firebase.database().ref().child('newsandevents').on("child_added", snap =>{
   var Id = snap.child("id").val();
   var Article = snap.child("article").val();
   var imageToken= snap.child("picture").val();
   var Title = snap.child("title").val();
   var Author = snap.child("author").val();
   var When = snap.child("when").val();
   var Where = snap.child("where").val();

    var sizerow = "4";
    var sizecol = "40";
    var sizerowtitle = "3";
    var sizecoltitle = "30";
    var tog="foo";
    var size = "size";
    var Image = "Image";
    var myimage = "myImg";
    var row = $("<tr><td class="+tog+">"+ Id +"</td><td><img id="+myimage+" class="+size+" src="+ imageToken +" alt = "+Image+"></td><td><textarea rows="+sizerowtitle+" cols="+sizecoltitle+" readonly>"+ Title +"</textarea></td><td>"+ Author +"</td><td>"+ When +"</td><td>"+ Where +"</td><td><textarea rows="+sizerow+" cols="+sizecol+" readonly>"+ Article +"</textarea></td></tr>"); 

    row.click(function() {
                openModal(Id); 

                localStorage.setItem('toeditnews', Id);
                idsaved = localStorage.getItem("toeditnews");

                localStorage.setItem('token', imageToken);

                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "none";
                document.getElementById("update_button").disabled = true;
                document.getElementById("edit_button").style.display = "inline-block";
                document.getElementById("edit_button").disabled = false;

                document.getElementById("updatedisplay2").src = imageToken;
                document.getElementById("title").value = Title;
                document.getElementById("author").value = Author;
                document.getElementById("when").value = When;
                document.getElementById("where").value = Where;
                document.getElementById("article").value = Article;

                document.getElementById("title").readOnly = true;
                document.getElementById("author").readOnly = true;
                document.getElementById("when").readOnly = true;
                document.getElementById("where").readOnly = true;
                document.getElementById("article").readOnly = true;
                document.getElementById("file-upload").disabled = true;
            });
            $("#tablebody").append(row);

    var rowCount = $('#tablebody >tr').length;
    document.getElementById("myspan").innerHTML=rowCount;
    });

function openModal(id) {
  $('#modal').fadeIn();
    $('#modal_main').show();
}

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
    var storageRef = firebase.storage().ref('newsandevents/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    var datenow = new Date();
    var titleval = document.getElementById("title").value;
    var authorval = document.getElementById("author").value;
    var articleval = document.getElementById("article").value;
    var whenval = document.getElementById("when").value;
    var whereval = document.getElementById("where").value;
    document.getElementById("add_button").disabled = true;
    const fileInput = document.getElementById('file-upload');
        if(titleval == "" || authorval == "" || articleval == "" || whenval == "" || whereval == "" || fileInput.files.length <= 0){
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

            var pushedRef = firebase.database().ref().child('newsandevents/').push({
              date: datenow.toString(),
              title: titleval,
              author: authorval,
              when: whenval,
              where: whereval,
              article: articleval,
              picture: image_url
            });

            var a = pushedRef.key ;
            firebase.database().ref().child('newsandevents/'+ a).set({
              id: a,
              date: datenow.toString(),
              title: titleval,
              author: authorval,
              when: whenval,
              where: whereval,
              article: articleval,
              picture: image_url
            });
  
              // print the image url  
               alert("Added successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("add_button").disabled = false;
            }); 
        });
        }
function edit_data(){
                document.getElementById("add_button").style.display = "none";
                document.getElementById("add_button").disabled = true;
                document.getElementById("update_button").style.display = "inline-block";
                document.getElementById("update_button").disabled = false;
                document.getElementById("edit_button").style.display = "none";
                document.getElementById("edit_button").disabled = true;

                document.getElementById("title").readOnly = false;
                document.getElementById("author").readOnly = false;
                document.getElementById("when").readOnly = false;
                document.getElementById("where").readOnly = false;
                document.getElementById("article").readOnly = false;
                document.getElementById("file-upload").disabled = false;
                Editbutton.style.backgroundColor = '#28a745';
            }

function update_data(){
    const fileInput = document.getElementById('file-upload');
    if (fileInput.files.length <= 0) {

    var titleval = document.getElementById("title").value;
    var authorval = document.getElementById("author").value;
    var articleval = document.getElementById("article").value;
    var whenval = document.getElementById("when").value;
    var whereval = document.getElementById("where").value;
    document.getElementById("update_button").disabled = true;

        if(titleval == "" || authorval == "" || articleval == "" || whenval == "" || whereval == ""){
        alert("Please fill all required information!");
        document.getElementById("update_button").disabled = false;
        return;
        }
            firebase.database().ref().child('newsandevents/'+ idsaved).update({
              title: titleval,
              author: authorval,
              when: whenval,
              where: whereval,
              article: articleval
            }).then(() =>{
               // print the image url  
               alert("Updated successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("update_button").disabled = false;
            });
    }else{
        filename = selectedFile.name;
        var storageRef = firebase.storage().ref();
        var tokensaved = localStorage.getItem("token");
        let name = tokensaved.substr(tokensaved.indexOf('%2F') + 3, (tokensaved.indexOf('?')) - (tokensaved.indexOf('%2F') + 3));
        name = name.replace('%20',' ');
        storageRef.child('newsandevents/'+name).delete().then(function() {
            console.log("Deleted successfully!");
        })
        .catch(function() {
            console.log("Unable to delete image!!!");
        });
    var storageRef = firebase.storage().ref('newsandevents/' + filename);
    var uploadTask = storageRef.put(selectedFile);

    var titleval = document.getElementById("title").value;
    var authorval = document.getElementById("author").value;
    var articleval = document.getElementById("article").value;
    var whenval = document.getElementById("when").value;
    var whereval = document.getElementById("where").value;
    document.getElementById("update_button").disabled = true;

        if(titleval == "" || authorval == "" || articleval == "" || whenval == "" || whereval == "" || fileInput.files.length <= 0){
        alert("Please fill all required information!");
        document.getElementById("update_button").disabled = false;
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

            firebase.database().ref().child('newsandevents/'+ idsaved).update({
              title: titleval,
              author: authorval,
              when: whenval,
              where: whereval,
              article: articleval,
              picture: image_url
            }).then(() =>{
               // print the image url  
               alert("Updated successfully!!!");
               document.getElementById('modal').style.display='none';
               var frm = document.getElementsByClassName('form')[0];
               frm.reset();
               document.getElementById("update_button").disabled = false;
            });
            }); 
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
