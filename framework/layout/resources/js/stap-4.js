function validate() {
  var chks = document.getElementsByName('contactmoment[]');
  var checkCount = 0;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
      checkCount++;
    }
  }
  if( document.form.voornaam.value == "" ){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft uw voornaam in</p>";
    return false;
  }
  if( document.form.achternaam.value == "" ){
    document.getElementById("required2").innerHTML = "<p style=padding:5px;>Vul alstublieft uw achternaam in</p>";
    return false;
  }
  if (checkCount < 1){
    document.getElementById("required3").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  }
  return( true );
}
