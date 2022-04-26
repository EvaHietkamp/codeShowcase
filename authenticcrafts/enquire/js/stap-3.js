function validate() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var chks = document.getElementsByName('contactmoment[]');
  var checkCount = 0;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
      checkCount++;
    }
  }
  if( document.form.voornaam.value == "" ){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  }
  if( document.form.achternaam.value == "" ){
    document.getElementById("required2").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  }
  if (checkCount < 1){
    document.getElementById("required3").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  }
  if( document.form.telefoon.value == "" ){
    document.getElementById("required8").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  }
  if( document.form.email.value == "" ){
      document.getElementById("required9").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
      return false;
  }
  if(document.form.email.value.match(mailformat)) {
    return true;
  } else {
    document.getElementById("required9").innerHTML = "<p style=padding:5px;background-color:rgb(217, 44, 44);>Your email address is not valid</p>";
    return false;
  }
  return( true );
  }
