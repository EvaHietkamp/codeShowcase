function validate() {
  var chks3 = document.getElementsByName('leverdatum[]');
  var checkCount3 = 0;
  for (var x = 0; x < chks3.length; x++) {
    if (chks3[x].checked) {
      checkCount3++;
    }
  }

  if( document.form.vraag3.value == "" ){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  }
  if (checkCount3 < 1){
    document.getElementById("required2").innerHTML = "<p style=padding:5px;>Vul alstublieft dit veld in</p>";
    return false;
  }
  return( true );
}
