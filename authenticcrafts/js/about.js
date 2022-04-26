function validate() {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var chks = document.getElementsByName('vraag1');
  var checkCount = 0;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
      checkCount++;
    }
  }
 var chks2 = document.getElementsByName('vraag2');
  var checkCount2 = 0;
  for (var y = 0; y < chks2.length; y++) {
    if (chks2[y].checked) {
      checkCount2++;
    }
  }
 var chks3 = document.getElementsByName('vraag3');
  var checkCount3 = 0;
  for (var x = 0; x < chks3.length; x++) {
    if (chks3[x].checked) {
      checkCount3++;
    }
  }
  if (checkCount < 1){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  } if (checkCount2 < 1){
    document.getElementById("required4").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;

} if (checkCount3 < 1){
    document.getElementById("required5").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  }
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
