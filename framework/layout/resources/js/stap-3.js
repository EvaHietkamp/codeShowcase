function validate() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if( document.form.straat.value == "" ){
    document.getElementById("required4").innerHTML = "<p style=padding:5px;>Vul alstublieft uw straat naam in</p>";
    return false;
  }
  if( document.form.huisnummer.value == "" ){
    document.getElementById("required5").innerHTML = "<p style=padding:5px;>Vul alstublieft uw huisnummer in</p>";
    return false;
  } if( document.form.postcode.value == "" ){
    document.getElementById("required6").innerHTML = "<p style=padding:5px;>Vul alstublieft uw postcode in</p>";
    return false;
  } if( document.form.plaats.value == "" ){
    document.getElementById("required7").innerHTML = "<p style=padding:5px;>Vul alstublieft uw plaats naam in</p>";
    return false;
  } if( document.form.telefoon.value == "" ){
    document.getElementById("required8").innerHTML = "<p style=padding:5px;>Vul alstublieft uw telefoon nummer in</p>";
    return false;
  } if( document.form.email.value == "" ){
      document.getElementById("required9").innerHTML = "<p style=padding:5px;>Vul alstublieft uw email in</p>";
      return false;
  } if(document.form.email.value.match(mailformat)) {
    return true;
  } else {
    document.getElementById("required9").innerHTML = "<p style=padding:5px;background-color:rgb(217, 44, 44);>Uw emailadres is niet geldig</p>";
    return false;
  }
  return( true );
}
