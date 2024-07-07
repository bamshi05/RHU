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
}
#pdf-container {
    width: 100%;
    height: 400px; /* Set the desired height for the PDF container */
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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="overview-wrap">
                        <h2 class="title-1">REPORTS</h2>
                        <h4 style="padding-left: 5px"><span class="badge badge-pill badge-info" id="myspan"></span></h4>
                        <div style="padding-left: 930px; position: absolute">
                        <button class="au-btn au-btn-icon au-btn--blue" id="add">Generate Report</button>
                        </div>
                        </div><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <h3 class="title-2 m-b-40"> Illnesses Monthly Report</h3>
                                    <div class="au-card-inner" style="height: 370px; overflow-y: scroll;">
                                        <iframe width="562" height="345" id="myChartMedicalCon" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSBa8hjJ9ny1RgzL1yIKvg0gsoJ1x47AcgRt_KovU0AXW1JSHs0Mj2Hzwz34o1JiLlRlysXrKCWx1Ff/pubchart?oid=1487321725&amp;format=interactive"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card m-b-30">
                                    <h3 class="title-2 m-b-40"> Medicine Monthly Report</h3>
                                    <div class="au-card-inner" style="height: 370px; overflow-y: scroll;">
                                        <iframe width="562" height="345" id="myChartMedicine" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSBa8hjJ9ny1RgzL1yIKvg0gsoJ1x47AcgRt_KovU0AXW1JSHs0Mj2Hzwz34o1JiLlRlysXrKCWx1Ff/pubchart?oid=1954944755&amp;format=interactive"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
   <!-- Main JS-->
    <div class="modal" id="modal">
           <div class="modal_bg " id="modal_bg">
               <div class="modal_main" id="modal_main">
                   <div class="modal-header">
                    <h3 style= "color: #007bff">Report Preview</h3>
                    <span onclick="document.getElementById('modal').style.display='none'" class="close"><button style="color: blue">&times;</button></span>
                </div>
            <div class="modal-body">
                <form class="form" style="color: black" action="" method="POST">
                      <div class="row">
                        <div id="pdf-container"></div>
                       <!-- <iframe src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"  width="600" height="780" style="position: absolute;top: 0px;bottom: 0px;right: 0px;width: 100%;border: none;margin: 0;padding: 0;overflow: hidden;z-index: 3;height: 500px;"></iframe>-->
                        </div> 
                </form>
                      </div>
                </div>
            </div>
        </div>
<script>
// Set the ID of the chart element
  var chartID = "myChartMedicine";
  var chartIDMedicalCon = "myChartMedicalCon";

  // Set the refresh interval to 5 minutes (300000 milliseconds)
  var refreshInterval = 120000;

  // Define the function that will refresh the chart
  function refreshChartMedicine() {
    // Select the chart element and set its src attribute to reload the chart
    var chart = document.getElementById(chartID);
    chart.src = chart.src;
  }
  function refreshChartMedicalCon() {
    // Select the chart element and set its src attribute to reload the chart
    var chartMedicalCon = document.getElementById(chartIDMedicalCon);
    chartMedicalCon.src = chartMedicalCon.src;
  }

  // Set up the timer to refresh the chart every 5 minutes
  setInterval(refreshChartMedicine, refreshInterval);
  setInterval(refreshChartMedicalCon, refreshInterval);


</script>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 RURAL HEALTH UNIT BUENAVISTA. All rights reserved.  </p>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.16/jspdf.plugin.autotable.min.js"></script>
    
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

<script src="index.js"></script>
<script>

firebase.auth().onAuthStateChanged(function(user) {
  if (!user) {
    // No user signed in.
      window.location.replace("index.php");
  }
  });

// Load the Google Sheets API
gapi.load('client', initClient);

function initClient() {
  // Initialize the API client and authenticate
  gapi.client
    .init({
      apiKey: 'AIzaSyAcA8u0hL4KKhGjDRJEnEm1jhHUAfcTsaE',
      clientId: '117101059158-t6s6tg5b7fu2alsoh9id3h886l81n5lb.apps.googleusercontent.com',
      discoveryDocs: ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
      scope: 'https://www.googleapis.com/auth/spreadsheets.readonly',
    })
    .then(
      function () {
        // API is initialized and ready to be used
        console.log('API initialized and ready to be used');
      },
      function (error) {
        console.log('Error initializing API:', error);
      }
    );
}

$('#add').click(function () {
  $('#modal').fadeIn();
  $('#modal_main').show();
  gapi.client.sheets.spreadsheets.values
    .get({
      spreadsheetId: '1TnSq4lQIEG3o1H4F70kbdtKDxwdZI2vZ0qvfVPqFQpM',
      range: 'Sheet2!A1:J33',
    })
    .then(function (response) {
      var values = response.result.values;

      var doc = new jsPDF('l');

      // Generate the PDF table manually
        var startY = 10;
        var margin = 10;
        var tableWidth = 190;
        var cellHeight = 5.5;
        var cellPadding = 1;
        var columnWidths = [29, 24, 29, 25, 25, 30, 23, 26, 33, 31]; // Adjust the widths as needed, excluding the first column

        doc.setFontSize(9);
        doc.setTextColor(0, 0, 0);
        doc.setLineWidth(0.1);

        // Draw table rows
        doc.setTextColor(0, 0, 0);
        doc.setFontStyle('normal');
        for (var i = 0; i < values.length; i++) {
          var rowData = values[i];
          var rowY = startY + (i + 1) * cellHeight;
          for (var j = 0; j < rowData.length; j++) {
            var cellData = rowData[j];
            var cellX = margin;
            var cellWidth = columnWidths[j] || 40; // Use column width from the array or default to 40 for the first column
            for (var k = 0; k < j; k++) {
              cellX += columnWidths[k] || 40; // Accumulate the widths of previous columns
            }
            doc.rect(cellX, rowY, cellWidth, cellHeight, 'S');
            doc.text(cellData, cellX + cellPadding, rowY + cellPadding + 3);
          }
        }


      // Save or open the PDF
      var pdfDataUri = doc.output('datauristring');
      var pdfIframe =
        '<iframe src="' +
        pdfDataUri +
        '"  width="600" height="780" style="position: absolute;top: 0px;bottom: 0px;right: 0px;width: 100%;border: none;margin: 0;padding: 0;overflow: hidden;z-index: 3;height: 500px;"></iframe>';
      $('#pdf-container').html(pdfIframe);
    })
    .catch(function (error) {
      console.log('Error fetching data:', error);
    });
});

    $('.close').click(function(){
        $('#modal').fadeOut();
        $('#modal_main').fadeOut();
    });
function logout(){
    firebase.auth().signOut().then(() =>{
        window.location.replace("index.php");
    });
}

  
</script>
</body>

</html>
<!-- end document-->
