// radio
function validate() {
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
  if (checkCount < 1){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  } if (checkCount2 < 1){
    document.getElementById("required2").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  }
  return( true );
}

//textfields
function validate() {
if( document.form.[name].value == "" ){
  document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
  return false;
}
return( true );
}

//emailadres
function validate() {
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if( document.form.[name].value == "" ){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft uw email in</p>";
    return false;
} if(document.form.email.value.match(mailformat)) {
  return true;
} else {
  document.getElementById("required").innerHTML = "<p style=padding:5px;background-color:rgb(217, 44, 44);>Uw emailadres is niet geldig</p>";
  return false;
}
return( true );
}

//Checkboxes
function validate() {
  var chks = document.getElementsByName('[name][]');
  var checkCount = 0;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
      checkCount++;
    }
  }
  if (checkCount < 1){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  }
  return( true );
}
