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
      document.getElementById("required").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
      return false;
    } if (checkCount2 < 1){
      document.getElementById("required2").innerHTML = "<p style=padding:5px;>Please fill in this field</p>";
      return false;

    }
    return( true );
  }
