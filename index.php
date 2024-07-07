<html>
	<head>
	<title>Admin Log In</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body class="bg">
  <center>
		<div class="main-div">
    <input type="email" placeholder="Email..." id="email_field" />
    <input type="password" placeholder="Password..." id="password_field" />
    <button onclick="login()">Login</button>
  </center>  
  </div>
<style type="text/css">
.bg{
  width: 99%;
  height: 75%;
  background-size: cover;
    background-image: url('c.jpg');
 }

</style>

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
  if (user) {
    // User is signed in.
      window.location.replace("chart.php");
  }
  });
</script>
	</body>
</html>