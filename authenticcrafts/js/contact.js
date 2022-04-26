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
    document.getElementById("required8").innerHTML = "<p style=padding:5px;>Vul alstublieft uw telefoon nummer in</p>";
    return false;
  }
  if( document.form.email.value == "" ){
      document.getElementById("required9").innerHTML = "<p style=padding:5px;>Vul alstublieft uw email in</p>";
      return false;
  }
  if(document.form.email.value.match(mailformat)) {
    return true;
  } else {
    document.getElementById("required9").innerHTML = "<p style=padding:5px;background-color:rgb(217, 44, 44);>Uw emailadres is niet geldig</p>";
    return false;
  }
  return( true );
}
