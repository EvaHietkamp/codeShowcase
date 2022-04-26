function validate() {
  var chks = document.getElementsByName('vraag3');
  var checkCount = 0;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
      checkCount++;
    }
  }
  if (checkCount < 1){
    document.getElementById("required").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
    return false;
  } 
  return( true );
}
