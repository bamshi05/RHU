var user = firebase.auth().currentUser;
function login(){
  var userEmail = document.getElementById("email_field").value;
  var userPass  = document.getElementById("password_field").value;
  
  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;

  console.log(errorCode);
  console.log(errorMessage);
  window.alert("Error :" + errorMessage);
  // ...
});
}


