var appointmentkey, newvalue, key;
  var Loggedusername = localStorage.getItem("loggedusername");
  firebase.database().ref("useraccounts").orderByChild("regnusername").equalTo(Loggedusername).once("value").then(function(snapshot) {
  snapshot.forEach(function(childSnapshot) {
    key = childSnapshot.key;
    firebase.database().ref("useraccounts/" + key + "/regnemail").once("value").then(function(snapshot) {
        newvalue = snapshot.val(); 
  document.getElementById("email").value = newvalue;
  document.getElementById("email").readOnly = true;
          firebase.database().ref().child("appointment").orderByChild("email").equalTo(newvalue).once("value",snap => {
                            if (snap.exists()){
                              firebase.database().ref().child("appointment").orderByChild("status").equalTo("active").once("value",snap => {
                                if (snap.exists()){
                                    firebase.database().ref("appointment").orderByChild("email").equalTo(newvalue).once("value").then(function(snapshot) {
                                          snapshot.forEach(function(childSnapshot) {
                                            appointmentkey = childSnapshot.key;
                                            firebase.database().ref("appointment/" + appointmentkey).once("value").then(function(snapshot) {
                                          
                                          var roname = snapshot.child("name").val();
                                          var roaddress = snapshot.child("address").val();
                                          var rophone = snapshot.child("phone").val();
                                          var roemail = snapshot.child("email").val();
                                          var roage = snapshot.child("age").val();
                                          var rogender = snapshot.child("gender").val();
                                          var roheight = snapshot.child("height").val();
                                          var roweight = snapshot.child("weight").val();
                                          var rocivilstatus = snapshot.child("civilstatus").val();
                                          var roparentname = snapshot.child("parentname").val();
                                          var romedicalcondition = snapshot.child("medicalcondition").val();
                                          var romedication = snapshot.child("medication").val();
                                          var roadditional = snapshot.child("additional").val();
                                          var rodate = snapshot.child("date").val();
                                          var rotime = snapshot.child("time").val();

                                          document.getElementById("name").value = roname;
                                          document.getElementById("address").value = roaddress;
                                          document.getElementById("phone").value = rophone;
                                          document.getElementById("email").value = roemail;
                                          document.getElementById("age").value = roage;
                                          document.getElementById("gender").value = rogender;
                                          document.getElementById("height").value = roheight;
                                          document.getElementById("weight").value = roweight;
                                          document.getElementById("civilstatus").value = rocivilstatus;
                                          document.getElementById("parentname").value = roparentname;
                                          document.getElementById("medicalcondition").value = romedicalcondition;
                                          document.getElementById("medication").value = romedication;
                                          document.getElementById("additional").value = roadditional;
                                          document.getElementById("date").value = rodate;
                                          document.getElementById("time").value = rotime;

                                          document.getElementById("name").readOnly = true;
                                          document.getElementById("address").readOnly = true;
                                          document.getElementById("phone").readOnly = true;
                                          document.getElementById("email").readOnly = true;
                                          document.getElementById("age").readOnly = true;
                                          document.getElementById("gender").disabled = true;
                                          document.getElementById("height").readOnly = true;
                                          document.getElementById("weight").readOnly = true;
                                          document.getElementById("civilstatus").disabled = true;
                                          document.getElementById("parentname").readOnly = true;
                                          document.getElementById("medicalcondition").disabled = true;
                                          document.getElementById("medication").disabled = true;
                                          document.getElementById("additional").readOnly = true;
                                          document.getElementById("date").readOnly = true;
                                          document.getElementById("time").readOnly = true;

                                          document.getElementById("setbutton").style.display = "none";
                                          document.getElementById("cancelbutton").style.display = "inline-block";
                                          document.getElementById("editbutton").style.display = "inline-block";
                                          selected = snapshot.child("medicalcondition").val();
                                          var dropdown = document.getElementById("medicalcondition");
                                          for (var i = 0; i < dropdown.options.length; i++) {
                                            if (selected.indexOf(dropdown.options[i].value) >= 0) {
                                              dropdown.options[i].selected = true;
                                            }
                                          }
                                          var document_style = document.documentElement.style;
                                          document_style.setProperty('--text', "'Selected: "+selected+"'");

                                          selectedmed = snapshot.child("medication").val();
                                          var dropdownmed = document.getElementById("medication");
                                          for (var i = 0; i < dropdownmed.options.length; i++) {
                                            if (selectedmed.indexOf(dropdownmed.options[i].value) >= 0) {
                                              dropdownmed.options[i].selected = true;
                                            }
                                          }
                                          document.querySelector('.multiple_selectmed').style.setProperty('--text', "'Selected: "+selectedmed+"'");
                                                });
                                              });
                                            });
                                      }else{
                              alert("No schedule yet or schedule has been declined!");
                            }
                                    });
                            }
          });
    });
  });
});