function validate() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if( document.form.voornaam.value == "" ){
    document.getElementById("required2").innerHTML = "<p style=padding:5px;>Please enter your first name</p>";
    return false;
  }
  if( document.form.achternaam.value == "" ){
    document.getElementById("required3").innerHTML = "<p style=padding:5px;>Please enter your last name</p>";
    return false;
  }
  if( document.form.telefoon.value == "" ){
    document.getElementById("required8").innerHTML = "<p style=padding:5px;>Please enter your phone number</p>";
    return false;
  }
  if( document.form.email.value == "" ){
      document.getElementById("required9").innerHTML = "<p style=padding:5px;>Please enter your email</p>";
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
